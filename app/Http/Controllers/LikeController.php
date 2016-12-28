<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\upload;
use App\Model\like;
use Auth;

class LikeController extends Controller
{
    public function create($id)
    {

      $likes=upload::where('id',$id)->get();

      foreach($likes as $like)
         $likesave=new like;
      $likesave->upload_id=$like->id;
      $likesave->user_id=Auth::user()->id;
      $likesave->count=1;
      $likesave->save();

      return back();


    }
    public function dislike($id)
    {


      like::where('user_id',$id)->delete();;
      return back();
    }
}
