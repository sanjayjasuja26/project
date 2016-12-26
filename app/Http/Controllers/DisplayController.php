<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\upload;
use App\Model\comment;
use Auth;


class DisplayController extends Controller
{
    public function index($id)
    {

      $data['displays']=upload::where('id',$id)->get();
      $data['comments']=comment::where('upload_id',$id)->orderBy('id', 'desc')->get();





      return view('display.index',$data);
    }
    public function create(Request $request)
    {
      $comment=new comment;
      $comment->comment=$request->comment;
      $comment->upload_id=$request->upload_id;
      $comment->user_id=Auth::user()->id;
      $comment->save();
      return back();


    }
    public function display()
    {
      die;
    }
}
