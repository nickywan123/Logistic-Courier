<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
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
     * Get the user info associated with the user.
     * each user has one user info
     */
    public function userInfo()
    {
        return $this->hasOne(UserInfo::class, 'user_id');
    }

    /**
     * Get the user contact associated with the user
     */
    public function userContact(){
        return $this->hasOne(UserContact::class,'user_id');
    }

    /**
     * Get the orders associated with the user
     */
    public function orders(){
        return $this->hasMany(Order::class);
    }

    /**
     * Get transactions associated with the user
     */
    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

}
