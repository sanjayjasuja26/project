<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Session;

use Illuminate\Http\Request;
use App\Register;
use Hash;

class LoginController extends Controller
{
    public function index()
    {
      return view('login.index');
    }
    public function create(Request $request)
    {

        $this->validate($request, [

        'email' => 'email|required|exists:registers'


    ]);


       $users = Register::where('email',$request->email)->get();

       foreach($users as $user)
       {
         $oldpassword=$user->password;

       }



       if(Hash::check( $request->password,$oldpassword))
       {
         return redirect('/');

       }


      else
      {
      \Session::flash('message', "invalid password");
        return back();


      }



    }
}
