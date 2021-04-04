<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        return view('client.cart');
    }

    public function store($id)
    {
        $product = Product::find($id);
        if (!$product) {
            abort(404);
        }
        $cart = session()->get('cart');

        if (!$cart) {
            $this->addProductIfCartIsEmpty($id, $cart, $product);
        } else {
            $this->updateCart($id, $cart, $product);
        }

        // return redirect()->back()->with('success', 'Product added to cart successfully!');
        return response()->json(['code' => 200, 'success' => 'Product added to cart successfully!']);
    }

    public function delete(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    private function addProductIfCartIsEmpty($id, $cart, $product)
    {
        $cart = [
            $id => [
                "id" => $product->id,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "photo" => $product->photo
            ]
        ];
        session()->put('cart', $cart);
    }

    private function updateCart($id, $cart, $product)
    {
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
        } else {
            $cart[$id] = [
                "id" => $product->id,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "photo" => $product->photo
            ];
            session()->put('cart', $cart);
        }
    }
}
