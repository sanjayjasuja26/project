<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\upload;


class DisplayController extends Controller
{
    public function index($id)
    {
      $data['displays']=upload::where('id',$id)->get();
    



      return view('display.index',$data);
    }
}
