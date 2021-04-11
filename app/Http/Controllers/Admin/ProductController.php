<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $products = Product::orderBy('category_id')->get();
        $categories = Category::all();
        return view('admin.products', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    /**
     * Store a new product.
     *
     * @param  ProductRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductRequest $request)
    {
        DB::beginTransaction();
        try {
            if ($request->has('product_image')) {
                $image = $request->file('product_image');
                $name = Str::slug($request->input('name')) . '_' . time();
                $folder = '/uploads/foods/';
                $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
                $this->uploadOne($image, $folder, 'public', $name);
            }

            $product = new Product([
                'name' => $request->product_name,
                'price' => $request->product_price,
                'description' => $request->product_description,
                'image' => $filePath
            ]);

            $product->category()->associate($request->product_category);
            $product->save();

            $tags = explode(",", $request->tags);
            $product->tag($tags);

            DB::commit();

            return redirect()->back()->with(['success' => 'Product added successfully.']);
        } catch (Exception $exception) {
            DB::rollback();

            throw new Exception($exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            if (File::exists(public_path("\storage") . $product->image)) {
                File::delete(public_path("\storage") . $product->image);
            }
        }
        $product->untag();
        $product->delete();
        return redirect()->back()->with(['success' => 'Product deleted successfully.']);
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
