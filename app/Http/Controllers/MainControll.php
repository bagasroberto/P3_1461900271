<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainControll extends Controller
{
   public function index(){
        return view('index0271');
    }
    public function databarang(){
        $item = DB::table('barang')
            ->select('*')
            ->get();        
        return view('databarang0271',compact('item'));
    }
    public function datapelanggan(){
        return view('datapelanggan0271');
    }   
    public function datatransaksi(){
        return view('datatransaksi0271');
    }  
    public function datauser(){
        return view('datauser0271');
    }  
}
