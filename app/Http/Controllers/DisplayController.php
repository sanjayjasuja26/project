<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\upload;
use App\Model\comment;
use App\Model\like;
use Auth;
use Session;


class DisplayController extends Controller
{
    public function index($id)
    {

      $data['displays']=upload::where('id',$id)->get();
      $data['comments']=comment::where('upload_id',$id)->orderBy('id', 'desc')->get();
      $data['likes']=like::where('user_id',Auth::id())->where('upload_id',$id)->first();
      return view('display.index',$data);
    }
    public function create(Request $request)
    {
      if(Auth::check()){
      $comment=new comment;
      $comment->comment=$request->comment;
      $comment->upload_id=$request->upload_id;
      $comment->user_id=Auth::user()->id;
      $comment->save();
      return back();
    }
      else {
        return redirect('login');
      }
    }
    public function delete($id)
    {
      comment::find($id)->delete();
      return back();
    }
}
