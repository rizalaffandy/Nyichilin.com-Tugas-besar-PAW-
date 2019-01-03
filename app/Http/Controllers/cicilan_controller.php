<?php

namespace App\Http\Controllers;
use App\cicilan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class cicilan_controller extends Controller
{
    public function index(){
    	return view('index');
    }
    public function cicil(){
    	return view('cicil');
    }
    public function show($id){
    	return view('/'.$id);
    }
     public function save(Request $request){

   		$cicil = new cicilan();

   		$cicil->namalaptop = $request->namalaptop;
   		$cicil->nama = $request->nama;
   		$cicil->ktm = $request->ktm;
   		$cicil->alamat = $request->alamat;

   		$cicil->save();
   		return view('Transaksi');
   }
}
