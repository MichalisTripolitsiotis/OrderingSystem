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
        if (request()->category) {
            $products = Product::with('category')->whereHas('category', function ($query) {
                $query->where('id', request()->category);
            })->get();
            $categories = Category::all();
            return view('client.products', [
                'products' => $products,
                'categories' => $categories
            ]);
        }
    }
}
