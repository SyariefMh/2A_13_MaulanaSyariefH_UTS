<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function create(){
        return view('register');
    }
    public function register(Request $request){
        $username = $request->username;
        $name = $request->nama;
        $email = $request->email;
        $password = $request->password;
        if($username != null){
            DB::select("INSERT INTO users (username, name, email, password) VALUE('$username', '$name','$email','$password')");
            return view('login');
        }
        else{
            return view('register');
        }
    }
}
