<?php

namespace App;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Contracts\Activity;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable,HasRoles,LogsActivity;

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
     * The attributes that should be given to activity logs
     * 
     */
    protected static $logAttributes = ['name','email'];

    protected static $ignoreChangedAttributes = ['password','updated_at'];

    protected static $recordEvents = ['created','updated'];

    protected static $logName = 'user';

    protected static $logOnlyDirty = true;

    public function getDescriptionForEvent(string $eventName): string
    {
        if($eventName == "created"){
            return "Your account has been {$eventName}";
        }else{
            return "Your profile has been {$eventName}";
        }
    }
    
    public function tapActivity(Activity $activity, string $eventName)
    {   
        $activity->causer_type = "App\User";
        $activity->causer_id = $this->id;
    }

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
