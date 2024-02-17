<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class KategoriProdukController extends Controller
{
    public function index(){
        $data['kategori_produk'] = KategoriProduk::all();
        return view('kategori.kategori-produk', $data);
    }
    public function create(Request $request){
        $credentials = $request->validate([
            'nama_kategori' => 'required'
        ]);
        KategoriProduk::create($credentials);
        return redirect('kategori-produk');
    }
    public function delete(Request $request){
        KategoriProduk::where('id', $request->id)->delete();
        return redirect('/kategori-produk');
    }
    public function update(Request $request){
        $credentials = $request->validate([
            'nama_kategori' => 'required',
            'status' => 'required'
        ]);
        KategoriProduk::where('id', $request->id)->update($credentials);
        return redirect('/kategori-produk');
    }
}
