<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Status;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $receivedOrders   = Order::where('status_id', Status::STATUS_RECEIVED)->count();
        $preparingOrders  = Order::where('status_id', Status::STATUS_PREPARING)->count();
        $readyOrders      = Order::where('status_id', Status::STATUS_READY)->count();
        $deliveringOrders = Order::where('status_id', Status::STATUS_DELIVERING)->count();

        return view('admin.home', [
            'receivedOrders' => $receivedOrders,
            'preparingOrders' => $preparingOrders,
            'readyOrders' => $readyOrders,
            'deliveringOrders' => $deliveringOrders
        ]);
    }
}
