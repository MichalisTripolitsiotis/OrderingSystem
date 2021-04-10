<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Get the Category of the specific Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
