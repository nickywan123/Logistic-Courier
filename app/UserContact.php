<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserContact extends Model
{
    
      // Set table
      protected $table = 'user_contacts';

      // Set timestamps
      public $timestamps = true;
  
      // Set primary key
      protected $primaryKey = 'user_id';
  
      // Set mass assignable columns
      protected $guarded = [      ];
  
      /**
       * Get the user info associated with the user.
       */
      public function user()
      {
          return $this->belongsTo(User::class, 'user_id');
      }
}
