<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class upload extends Model
{
  //
  public function like()
 {
     return $this->hasMany('App\Model\like','upload_id');
 }

}
