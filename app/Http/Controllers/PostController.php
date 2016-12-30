<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Post;
use Auth;

class PostController extends Controller
{
    public function index()
    {
      return view('post.index');
    }

    public function create(Request $request)
    {
      $post =new Post;

      if($request->hasfile('image'))
       {
         $file=$request->file('image');
         $path='image';

         $filename=$file->getClientOriginalName();

         $post->image = $path.'/'.$filename;
         $file->move($path,$filename);
       }
       $post->title=$request->title;
       $post->user_id=Auth::user()->id;
       $post->save();


      return redirect("/admin/post");
    }
}
