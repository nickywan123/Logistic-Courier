<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
     // Set table
     protected $table = 'global_weight';

     // Set timestamps
     public $timestamps = true;
 
     // Set primary key
     protected $primaryKey = 'id';
 
     // Set mass assignable columns
     protected $fillable = [];
}
