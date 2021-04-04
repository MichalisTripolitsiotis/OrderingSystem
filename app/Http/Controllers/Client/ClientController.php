<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('client.home', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function show($id)
    {
        $categories = Category::all();
        $products = Category::find($id)->products;
        return view('client.home', [
            'products' => $products,
            'categories' => $categories
        ]);
    }
}
