<?php

namespace App\Http\Controllers;
use App\model\Post;

use Illuminate\Http\Request;

class ManagepostController extends Controller
{
    public function index(){

    return view('managepost.index',['posts'=>Post::all()]);
    }
}
