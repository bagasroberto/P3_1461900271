<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', function () {
    return view('index0271');
});
Route::get('/index','App\Http\Controllers\MainControll@index');

Route::get('/databarang', function () {
    return view('databarang0271');
});
Route::get('/databarang','App\Http\Controllers\MainControll@databarang');

Route::get('/datapelanggan', function () {
    return view('datapelanggan0271');
});
Route::get('/datapelanggan','App\Http\Controllers\MainControll@datapelanggan');

Route::get('/datatransaksi', function () {
    return view('datatransaksi0271');
});
Route::get('/datatransaksi','App\Http\Controllers\MainControll@datatransaksi');

Route::get('/datauser', function () {
    return view('datauser0271');
});
Route::get('/datauser','App\Http\Controllers\MainControll@datauser');
