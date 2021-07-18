<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    protected $fillable = ['name'];

    // One courier has many rates
    public function rates(){
        return $this->hasMany(Rate::class);
    }

    // One courier has locations and rates
    public function locations(){
        return $this->hasManyThrough(Location::class,Rate::class);
    }

    public function image(){
        return $this->hasOne(CourierImage::class);
    }
}
