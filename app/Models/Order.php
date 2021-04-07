<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are not mass assignable
     *
     * @var array
     */
    protected $guarded = [];

    /**
     *  Users
     * 
     * @return $user;
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     *  Products
     * 
     * @return $products;
     */
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }


    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function receivedOrder()
    {
        return $this->status_id == Status::STATUS_RECEIVED;
    }

    public function preparingOrder()
    {
        return $this->status_id == Status::STATUS_PREPARING;
    }

    public function readyOrder()
    {
        return $this->status_id == Status::STATUS_READY;
    }

    public function deliveringOrder()
    {
        return $this->status_id == Status::STATUS_DELIVERING;
    }

    public function deliveredOrder()
    {
        return $this->status_id == Status::STATUS_DELIVERED;
    }
}
