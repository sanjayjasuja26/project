<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;

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
      'email' => 'email|required|unique:users',
      'password' => 'required|min:3|confirmed',
        'password_confirmation' => 'required|min:3'
  ]);

  $user =new User;
  $user->name=$request->name;
  $user->email=$request->email;
  $user->password=Hash::make($request->password);
  $user->save();
  Auth::loginUsingId($user->id);

  return redirect('/');


    }
}
