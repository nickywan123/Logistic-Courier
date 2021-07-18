<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postcode extends Model
{
   
     // Set timestamps
     public $timestamps = true;
 
     // Set primary key
     protected $primaryKey = 'id';
 
     // Set mass assignable columns
     protected $fillable = [];
}
