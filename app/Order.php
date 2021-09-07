<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Contracts\Activity;
use Spatie\Activitylog\Traits\LogsActivity;

class Order extends Model
{
    use LogsActivity;

    protected $guarded =[];
    // // Set primary key
    // protected $primaryKey = 'order_number';

      /**
     * The attributes that should be given to activity logs
     * 
     */
    protected static $logAttributes = ['user_id','user.name','order_number','courier_id','hub_id','amount'];


    protected static $recordEvents = ['created','updated'];

    protected static $logName = 'order';

    protected static $logOnlyDirty = true;

    public function getDescriptionForEvent(string $eventName): string
    {   
            return "Order-{$this->order_number} has been {$eventName}";   
    }

    // public function tapActivity(Activity $activity, string $eventName)
    // {
    //     $activity->causer_id = auth()->id();
    // }


    // each order has order details
    public function orderDetails(){
        return $this->hasOne(OrderDetail::class,'order_number','order_number');
    }

    //belongs to a courier
    public function courier(){
        return $this->belongsTo(Courier::class,'courier_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

     /**
     * Get order status.
     */
    public function status()
    {
        return $this->belongsTo(Status::class, 'order_status', 'id');
    }

    /**
     * Each order belongs to a hub
     */
    public function hub(){
        return $this->belongsTo(Hub::class);
    }
}
