<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\upload;

class DefaultController extends Controller
{
    public function index()
    {



      $data['images']=upload::orderBy('id', 'DESC')->get();
      

       return view('default.index',$data);

    }
}
