<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Login;
      
class LoginController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $login = new Login;
        $login->email = $request->email;
        $login->password = $request->password;
        $login->save();
        return redirect()->router('Login')->with('success','Se ha logeado exitosamente');
   }
}
