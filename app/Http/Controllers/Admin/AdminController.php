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
        $receivedOrders = Order::where('status_id', Status::STATUS_RECEIVED);
        $preparingOrders = Order::where('status_id', Status::STATUS_PREPARING);
        $readyOrders = Order::where('status_id', Status::STATUS_READY);
        $deliveringOrders = Order::where('status_id', Status::STATUS_DELIVERING);

        return view('admin.home', [
            'receivedOrders' => $receivedOrders,
            'preparingOrders' => $preparingOrders,
            'readyOrders' => $readyOrders,
            'deliveringOrders' => $deliveringOrders
        ]);
    }
}
