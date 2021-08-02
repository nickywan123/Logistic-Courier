<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hub extends Model
{
    protected $guarded =[];
    
    //Each hub has many orders
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
