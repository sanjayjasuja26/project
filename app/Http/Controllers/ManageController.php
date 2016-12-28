<?php

namespace App\Http\Controllers;
use App\Model\upload;
use App\Model\comment;
use App\Model\like;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function index()
    {
    $data['manages']=upload::orderBy('id', 'DESC')->get();
      return view('manage.index',$data);
    }
    public function delete($id)
    {

      upload::find($id)->delete();
      comment::where('upload_id',$id)->delete();
      like::where('upload_id',$id)->delete();
      return back();

    }
}
