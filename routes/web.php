<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailJualController;
use App\Http\Controllers\DiskonController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('index');
});
        //Login Controller
Route::get('/login',[LoginController::class,'login']);
Route::get('/register',[LoginController::class,'register']);
Route::get('/logout',[LoginController::class,'logout']);
Route::post('/proses/login',[LoginController::class,'auth']);
Route::post('/create',[LoginController::class,'create']);

Route::middleware('status.login')->group(function(){

    //Admin
Route::get('/dashbord',[AdminController::class,'index']);

    //Pengguna
Route::get('/home',[UserController::class,'index']);
Route::get('/add/pengguna',[UserController::class,'add']);
Route::get('/pengguna',[UserController::class,'pengguna']);
Route::post('/pengguna/create',[UserController::class,'create']);
Route::post('/pengguna/update/{id}',[UserController::class,'update']);
Route::get('/pengguna/delete/{id}',[UserController::class,'delete']);

});
    //Pelanggan
Route::get('/pelanggan',[PelangganController::class,'index']);
Route::get('/add-pelanggan',[PelangganController::class,'add']);
Route::post('/create/pelanggan',[PelangganController::class,'create']);
Route::post('/update/pelanggan/{id}',[PelangganController::class,'update']);
Route::get('/delete/pelanggan/{id}',[PelangganController::class,'delete']);

    //KategoriProduk
Route::get('/kategori-produk',[KategoriProdukController::class,'index']);
Route::post('/create/kategori',[KategoriProdukController::class,'create']);
Route::post('/update/kategori/{id}',[KategoriProdukController::class,'update']);
Route::get('/delete/kategori/{id}',[KategoriProdukController::class,'delete']);

    //produk
Route::get('/produk',[ProdukController::class,'index']);
Route::get('/add-produk',[ProdukController::class,'add']);
Route::post('/create/produk',[ProdukController::class,'create']);

    //Diskon
Route::get('/diskon',[DiskonController::class,'index']);
// Route::get('/add-diskon',[DiskonController::class,'add']);
Route::post('/diskon/create',[DiskonController::class,'create']);
Route::post('/diskon/update/{id}',[DiskonController::class,'update']);
Route::get('/diskon/delete/{id}',[DiskonController::class,'delete']);

    //Penjualan
Route::get('/penjualan',[PenjualanController::class,'index']);
Route::post('/create/penjualan',[PenjualanController::class,'create']);
Route::post('/update/penjualan/{pelanggan_id}',[PenjualanController::class,'update']);
Route::get('/delete/penjualan/{id}',[PenjualanController::class,'delete']);

    //Penjualan
Route::get('/detail-jual',[DetailJualController::class,'index']);
Route::post('/detail-jual/create',[DetailJualController::class,'create']);
Route::post('/detail/jual/update/{id}',[DetailJualController::class,'update']);
Route::get('/detail-jual/delete/{id}',[DetailJualController::class,'delete']);

