<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    const STATUS_RECEIVED = 1;

    const STATUS_PREPARING = 2;

    const STATUS_READY = 3;

    const STATUS_DELIVERING = 4;

    const STATUS_DELIVERED = 5;

    /**
     * Get the Orders of the specific Status
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
