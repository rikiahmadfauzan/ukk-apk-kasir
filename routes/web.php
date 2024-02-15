<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DiskonController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenggunaController;
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
Route::get('/data/pelanggan',[PelangganController::class,'view']);
Route::post('/create/pelanggan',[PelangganController::class,'create']);

    //KategoriProduk
Route::get('/kategori-produk',[KategoriProdukController::class,'index']);
Route::post('/create/kategori',[KategoriProdukController::class,'create']);
Route::post('/update/kategori/{id}',[KategoriProdukController::class,'edit']);
Route::get('/kategori/delete/{id}',[KategoriProdukController::class,'delete']);

    //produk
Route::get('/add-produk',[ProdukController::class,'add']);
Route::post('/create/produk',[ProdukController::class,'create']);

    //produk
Route::get('/diskon',[DiskonController::class,'index']);
Route::get('/add-diskon',[DiskonController::class,'add']);
Route::post('/diskon/create',[DiskonController::class,'create']);
