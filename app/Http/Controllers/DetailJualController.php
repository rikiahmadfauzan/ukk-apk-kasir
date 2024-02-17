<?php

namespace App\Http\Controllers;

use App\Models\DetailJual;
use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;

class DetailJualController extends Controller
{
    public function index(){
        $data['penjualan_id'] = Penjualan::all();
        $data['produk_id'] = Produk::all();
        $data['detail_jual'] = DetailJual::all();
        return view('detail-jual.detail-jual', $data);
    }
    public function create(Request $request){
        $credentials = $request->validate([
            'jumlah_produk'=> 'required',
            'harga_jual'=> 'required',
            'penjualan_id'=> 'required',
            'produk_id'=> 'required'
        ]);

        DetailJual::create($credentials);
        return redirect('/detail-jual');
    }
    public function update(Request $request){
        $credentials = $request->validate([
            'jumlah_produk'=> 'required',
            'harga_jual'=> 'required',
            // 'penjualan_id'=> 'required',
            // 'produk_id'=> 'required'
        ]);

        DetailJual::where('id', $request->id)->update($credentials);
        return redirect('/detail-jual');
    }

    public function delete(Request $request){
        DetailJual::where('id', $request->id)->delete();
        return redirect('/detail-jual');

    }
}
