<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded =[];
    // // Set primary key
    // protected $primaryKey = 'order_number';


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
}
