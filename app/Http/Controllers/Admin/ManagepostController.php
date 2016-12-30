<?php

namespace App\Http\Controllers\Admin;
use App\model\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagepostController extends Controller
{
    public function index(){

    return view('managepost.index',['posts'=>Post::all()]);
    }
}
