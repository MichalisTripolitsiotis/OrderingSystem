<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index()
    {
        $products = Product::all();

        return view('client.home', [
            'products' => $products,
        ]);
    }
}
