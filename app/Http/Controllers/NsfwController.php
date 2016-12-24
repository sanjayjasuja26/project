<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NsfwController extends Controller
{
  public function index()
  {
    return view('nsfw.index');
  }
}
