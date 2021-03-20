<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**  
     * Return the user is admin
     *
     *  @return boolean
     */
    public function isAdmin()
    {
        return $this->role_id === Role::ADMIN;
    }

    /**
     * Return the user is employee
     *
     * @return boolean
     */
    public function isEmployee()
    {
        return $this->role_id === Role::EMPLOYEE;
    }

    /**
     * Return the user is client
     *
     * @return boolean
     */
    public function isClient()
    {
        return $this->role_id === Role::CLIENT;
    }

    /**
     * Return the Role of the specific User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
