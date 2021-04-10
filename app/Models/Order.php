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
     *  Return the User that this order belongs to
     * 
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     *  Return all the Products of the Order
     * 
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    /**
     *  Return the Status that of the Order
     * 
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    /**
     *  Return the received orders
     * 
     * @return bool
     */
    public function receivedOrder()
    {
        return $this->status_id == Status::STATUS_RECEIVED;
    }

    /**
     *  Return the preparing orders
     * 
     * @return bool
     */
    public function preparingOrder()
    {
        return $this->status_id == Status::STATUS_PREPARING;
    }

    /**
     *  Return the ready orders
     * 
     * @return bool
     */
    public function readyOrder()
    {
        return $this->status_id == Status::STATUS_READY;
    }

    /**
     *  Return the delivering orders
     * 
     * @return bool
     */
    public function deliveringOrder()
    {
        return $this->status_id == Status::STATUS_DELIVERING;
    }

    /**
     *  Return the delivered orders
     * 
     * @return bool
     */
    public function deliveredOrder()
    {
        return $this->status_id == Status::STATUS_DELIVERED;
    }
}
