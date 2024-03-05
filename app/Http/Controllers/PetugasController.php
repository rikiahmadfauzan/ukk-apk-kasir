<?php

namespace App\Http\Controllers;

use App\Models\DiskonProduk;
use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function produk(){
        $data['produk'] = Produk::all();
        return view('petugas.produk',$data);
    }
    public function edit(Request $request){
        $data['kategori_produk'] = KategoriProduk::all();
        $data['diskon'] = DiskonProduk::all();
        $data['produk'] = Produk::where('id', $request->id)->first();
        return view('petugas.edit-produk',$data);
    }
    public function update(Request $request){
        $validate = $request->validate([
            'diskon_produk_id' => 'required',
        ]);
        Produk::where('id', $request->id)->update($validate);
        return redirect('/produk');

    }
}
