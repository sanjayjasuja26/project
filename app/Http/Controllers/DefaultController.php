<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Post;

class DefaultController extends Controller
{
    public function index()
    {
        return view('default.index',['posts'=>Post::get()]);
    }
}
