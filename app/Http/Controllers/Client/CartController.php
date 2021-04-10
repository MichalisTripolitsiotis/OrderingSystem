<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('client.cart');
    }

    /**
     * Store a new category.
     *
     * @param  $id
     * @return \Illuminate\Http\JsonResponse
     */
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

        return response()->json(['code' => 200, 'success' => 'Product added to cart successfully!']);
    }

    /**
     * Remove the specified resource from cart.
     *
     * @param Request $request
     */
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

    /**
     * Check if cart is empty and add product
     * 
     * @param $id
     * @param $cart
     * @param $product
     */
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

    /**
     * Check if product already in card or update card with new product
     * 
     * @param $id
     * @param $cart
     * @param $product
     */
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
