<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     *  Return the products of the category
     * 
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
