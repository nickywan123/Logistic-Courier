<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Contracts\Activity;
use Spatie\Activitylog\Traits\LogsActivity;

class Transaction extends Model
{
    use LogsActivity;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

     /**
     * The attributes that should be given to activity logs
     * 
     */
    protected static $logAttributes = ['user_id','user.name','transaction_id','amount'];


    protected static $recordEvents = ['created','updated'];

    protected static $logName = 'credit';

    protected static $logOnlyDirty = true;

    public function getDescriptionForEvent(string $eventName): string
    {   
            return "Top Up Credit-{$this->transaction_id} for RM{$this->amount}";   
    }

    public function tapActivity(Activity $activity, string $eventName)
    {
         $activity->causer_type = "App\User";
         $activity->causer_id = $this->user_id;
        //$activity->causer_id = auth()->id();
    }

    /**
     * Get transaction belong to a user
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
}
