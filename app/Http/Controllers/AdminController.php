<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $data = db::select('SELECT id,username, name, email FROM users');
        return view('layout.master', compact('data'));
    }
    public function edit(Request $request, $id){
        $data = db::select('SELECT id,username, name, email FROM users WHERE id = ?', [$request->edit]);
        return view('admin.formEdit', compact('data'));
    }

    //PRODUK
    public function show_produk(){
        $data = db::select('SELECT * FROM produk');
        return view('layout.produk', compact('data'));
    }

    public function insert(Request $request){
        $pdk1 = $request->nama;
        $pdk2 = $request->detail;
        $pdk3 = $request->harga;
        db::select("INSERT INTO produk(nama,detail,harga) VALUE ('$pdk1','$pdk2','$pdk3')" );
        return redirect()->route('show_produk');
    }
}
