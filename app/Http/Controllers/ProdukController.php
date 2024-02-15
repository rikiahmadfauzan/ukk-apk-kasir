<?php

namespace App\Http\Controllers;

use App\Models\DiskonProduk;
use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function add(){
        $data['kategori_produk'] = KategoriProduk::all();
        $data['diskon'] = DiskonProduk::all();
        return view('produk.add-produk',$data);
    }
    public function create(Request $request){
        $credentials = $request->validate([
            'nama_produk' => 'required',
            'gambar_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'tanggal_kadaluarsa' => 'required',
            'kategori_produk_id' => 'required',
            'diskon_produk_id' => 'required'
        ]);
        Produk::create([
            'nama_produk' => $request->nama_produk,
            'gambar_produk' => $request->file('gambar_produk')->store('foto-produk'),
            'harga' => $request->harga,
            'stok' => $request->stok,
            'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,
            'kategori_produk_id' => $request->kategori_produk_id,
            'diskon_produk_id' => $request->diskon_produk_id
        ]);
        return redirect('/produk');
    }
}
