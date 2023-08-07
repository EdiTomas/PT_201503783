<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function store(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('Ahorro');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

       // $login = new Login;
       // $login->email = $request->email;
      //  $login->password = $request->password;
      //  $login->save();
      //  return redirect()->router('login')->with('success','Se ha logeado exitosamente');
   }
}
