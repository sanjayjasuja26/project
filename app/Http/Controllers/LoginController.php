<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Session;

use Illuminate\Http\Request;
use App\Register;
use Hash;
use Auth;

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

if(Auth::attempt(['email' => $request->email, 'password' =>$request->password])){

  return redirect('/');

}
    else{
      echo 'hello';
    }





    }

    public function getLogout(){

      Auth::logout();
      return redirect('/');
    }
}
