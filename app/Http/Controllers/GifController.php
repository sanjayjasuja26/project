<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GifController extends Controller
{
  public function index()
  {
    return view('gif.index');
  }
}
