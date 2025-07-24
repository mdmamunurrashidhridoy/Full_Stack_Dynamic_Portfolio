<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function register(Request $request){

        $request->validate([
            'name' => 'required',
            'email'=> 'required',
            'password'=> 'required|min:4',
        ]);

        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
        ]);

        if($user){ echo 'Registration done!';} else{echo 'registration not done!';}
      
    }
    public function login(Request $request){
        $credentials = $request->validate([
            "email"=> "required",
            "password"=> "required",
        ]);

        

        if(Auth::attempt($credentials)) {
            echo "<h1>Login Success<h2>";
        }else{
            echo "<h1>login Failed</h1>";
        }
    }

    

}
