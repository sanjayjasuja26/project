<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\upload;

class DefaultController extends Controller
{
    public function index()
    {
        return view('default.index');
    }
}
