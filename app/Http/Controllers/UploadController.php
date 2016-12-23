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
    public   function image(Request $request)
    {
          echo "<pre>";print_r($request->all());die;
       $upload= new upload;
       $path=public_path('uploads');
       die;
      if(!is_dir($path))mkdir($path,0777);
      $path=public_path('uploads/image');
         if(!is_dir($path))mkdir($path,0777);
         if($request->hasfile('image'))
        {
          $file=$request->file('image');
          $db_path = 'uploads/image';
          $filename=base_convert(time(),10,36).'_'.$file->getClientOriginalName();
          $upload->image = $db_path.'/'.$filename;
          $request->file('image')->move($db_path,$filename);
        }
        $upload->save();
return Redirect('/');

    }
}
