<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * The admin role constant
     */
    const ADMIN = 1;

    /**
     * The employee role constant
     */
    const EMPLOYEE = 2;

    /**
     * The client role constant
     */
    const CLIENT = 3;

    /**
     * Get the Users of the specific Role
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
