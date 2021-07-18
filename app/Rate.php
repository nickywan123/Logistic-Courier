<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $guarded =[];

    // belong to a courier
    public function courier(){
       return $this->belongsTo(Courier::class);
    }

    // belongs to a location(penisular or sabah/sarawak)
    public function locations(){
       return $this->belongsTo(Location::class);
    }


}
