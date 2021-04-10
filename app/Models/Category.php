<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     *  Return the products of the order
     * 
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
