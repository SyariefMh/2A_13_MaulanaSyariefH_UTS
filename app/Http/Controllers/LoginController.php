<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request){
        if($request->username == "admin"){
            $data = DB::select('SELECT * FROM users WHERE username = ? AND password = ?',[$request->username,$request->password]);
            if ($data) {
                return redirect()->route('admin');
            }else {
                return redirect()->route('login');
            }
        }
        else{
            $data1 = DB::select('SELECT * FROM users WHERE username = ? AND password = ?',[$request->username,$request->password]);
            if ($data1) {
                return redirect()->route('home');
            }else {
                return redirect()->route('login');
            }
        }
    }
}
