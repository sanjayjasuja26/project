<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamingController extends Controller
{
    public function index()
    {
      return view('gaming.index');
    }
}
