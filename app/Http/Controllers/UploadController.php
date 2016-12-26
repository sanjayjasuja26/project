<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\upload;

class UploadController extends Controller
{
    public function index()
    {
      return view('upload.index');
    }

    public function image(Request $request)
    {

       $upload= new upload;
         if($request->hasfile('image'))
        {
          $file=$request->file('image');
          $path='image';
          $filename=$file->getClientOriginalName();
          $upload->image = $path.'/'.$filename;
          $file->move($path,$filename);

        }
          $upload->title=$request->title;
         $upload->save();
         return redirect('/');

    }
}
