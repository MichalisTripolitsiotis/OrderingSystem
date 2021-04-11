<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Conner\Tagging\Taggable;

class Product extends Model
{
    use HasFactory, Taggable;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the Category of the specific Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the Order of the specific Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
