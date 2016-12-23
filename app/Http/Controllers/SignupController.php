<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
use Hash;

class SignupController extends Controller
{
    public function index()
    {
      return view('register.index');
    }
    public function create(Request $request)
    {
      $this->validate($request, [
      'name' => 'required|max:255',
      'email' => 'email|required|unique:registers',
      'password' => 'required|min:3|confirmed',
        'password_confirmation' => 'required|min:3'
  ]);

  $user =new Register;
  $user->name=$request->name;
  $user->email=$request->email;
  $user->password=Hash::make($request->password);
  $user->save();
  return back();


    }
}
