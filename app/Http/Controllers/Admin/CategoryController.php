<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.categories', [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a new category.
     *
     * @param  CategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CategoryRequest $request)
    {
        DB::beginTransaction();
        try {

            if ($request->has('category_image')) {
                $image = $request->file('category_image');
                $name = Str::slug($request->input('name')) . '_' . time();
                $folder = '/uploads/images/';
                $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
                $this->uploadOne($image, $folder, 'public', $name);
            }

            $category = new Category([
                'name' => $request->category_name,
                'image' => $filePath
            ]);

            $category->save();
            DB::commit();

            // Return user back and show a flash message
            return redirect()->back()->with(['success' => 'Category added successfully.']);
        } catch (Exception $exception) {
            DB::rollback();

            throw new Exception($exception->getMessage());
        }
    }

    public function update(Category $category, Request $request)
    {

        $this->validate($request, [
            'category_edit_name'  => 'required|string|max:255'
        ]);
        $category->name = $request->input('category_edit_name');



        if ($request->has('category_edit_image')) {
            if ($category->image) {
                if (File::exists(public_path("\storage") . $category->image)) {
                    File::delete(public_path("\storage") . $category->image);
                }
            }
            $image = $request->file('category_edit_image');
            $name = Str::slug($request->input('name')) . '_' . time();
            $folder = '/uploads/images/';
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
            $category->image = $filePath;
        }

        $category->save();

        return redirect()->back()->with(['success' => 'Category updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Category $category)
    {
        $category->product()->delete();
        $category->delete();
        return redirect()->back()->with(['success' => 'Category deleted successfully.']);
    }


    /**
     * Private method to store file into the public folder
     * 
     * @param UploadedFile $uploadedFile
     * @param $folder
     * @param $disk
     * @param $filename
     * 
     * @return $file
     */
    private function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : Str::random(25);

        $file = $uploadedFile->storeAs($folder, $name . '.' . $uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }
}
