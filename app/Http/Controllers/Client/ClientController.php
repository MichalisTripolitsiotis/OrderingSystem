<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('client.home', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    /**
     * Display a listing of the Categories.
     *
     * @return \Illuminate\View\View
     */
    public function showCategories()
    {
        $categories = Category::all();
        return view('client.home', [
            'categories' => $categories
        ]);
    }

    /**
     * Display a product.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function showProducts($id)
    {
        $categories = Category::all();
        $products = Category::find($id)->products;
        return view('client.products', [
            'products' => $products,
            'categories' => $categories
        ]);
    }
}
