<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //

    public function User()
   {
       return $this->belongsTo('App\User');
   }
}
