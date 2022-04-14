<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CincinController extends Controller
{
    public function index(){
        $data = DB::select('SELECT * FROM produk');
        return view('cincin', compact('data'));
    }
}
