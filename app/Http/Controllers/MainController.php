<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainControll extends Controller
{
   public function index(){
        return view('index0271');
    }
    public function databarang(){
        return view('databarang0271');
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

        public function create(){
            return view('tambah_data');
        }

        public function store(Request $request){
            
        }
}
