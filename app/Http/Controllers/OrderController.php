<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Status;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $order = Order::create([
                'address'   => $request->address,
                'city'      => $request->city,
                'total'     => $request->total,
                'postcode'  => $request->postcode,
                'phone'     => $request->phone,
                'status_id' => Status::STATUS_RECEIVED,
                'user_id'   =>  auth()->user()->id
            ]);

            foreach ($request->orders as $key => $item) {
                OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $item['id'],
                    'quantity'  => $item['quantity']
                ]);
            }

            DB::commit();

            $request->session()->forget('cart');

            return redirect(route('client.index'))
                ->with('success', 'Order sent successfully');
        } catch (Exception $exception) {
            DB::rollback();

            throw new Exception($exception->getMessage());
        }
    }
}
