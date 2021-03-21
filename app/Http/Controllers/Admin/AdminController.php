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
        $orders = Order::withCount([
            'status as received_status_count' => function ($query) {
                $query->where('status_id', Status::STATUS_RECEIVED);
            },
            'status as preparing_status_count' => function ($query) {
                $query->where('status_id', Status::STATUS_PREPARING);
            },
            'status as ready_to_deliver_status_count' => function ($query) {
                $query->where('status_id', Status::STATUS_READY);
            },
            'status as delivering_status_count' => function ($query) {
                $query->where('status_id', Status::DELIVERING);
            },

        ])->get();

        return view('admin.home', [
            'orders' => $orders
        ]);
    }
}
