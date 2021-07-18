<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourierImage extends Model
{
    protected $guarded =[];

    public function courier(){
        return $this->belongsTo(Courier::class);
    }
}
