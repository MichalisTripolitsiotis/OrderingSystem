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
}
