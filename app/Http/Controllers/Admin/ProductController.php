<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $products = Product::all();
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
        $product = new Product();
        $product->name = $request->input('product_name');
        $product->price = $request->input('product_price');
        $product->description = $request->input('product_description');

        if ($request->has('product_image')) {
            $image = $request->file('product_image');
            $name = Str::slug($request->input('name')) . '_' . time();
            $folder = '/uploads/foods/';
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
            $product->image = $filePath;
        }

        $product->category()->associate($request->product_category);
        $tags = explode(",", $request->tags);
        $product->save();
        $product->tag($tags);

        // Return user back and show a flash message
        return redirect()->back()->with(['success' => 'Product added successfully.']);
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
