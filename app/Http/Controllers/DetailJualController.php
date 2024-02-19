<?php

namespace App\Http\Controllers;

use App\Models\DetailJual;
use App\Models\Pelanggan;
use App\Models\Pengiriman;
use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;

class DetailJualController extends Controller
{
    public function transaksi(Request $request){
        $data['produk'] = Produk::where('id', $request->id)->first();
        // $data['pelanggan'] = Pelanggan::where('id', $request->id)->first();
        // $data['detail_jual'] = DetailJual::where('id', $request->id)->first();
        $data['penjualan'] = Penjualan::where('id', $request->id)->first();
        $data['pengiriman'] = Pengiriman::where('id', $request->id)->first();
        return view('detail-jual.transaksi', $data);
    }
    public function detail(){
        // $data['produk'] = Produk::first();
        // $data['detail_jual'] = DetailJual::first();
        // $data['penjualan'] = Penjualan::first();
        // $data['pengiriman'] = Pengiriman::first();
        return view('detail-jual.detail');
    }
    // public function transaksi(){
    //     $data['produk'] = Produk::all();
    //     $data['detail_jual'] = DetailJual::first();
    //     $data['penjualan'] = Penjualan::first();
    //     $data['pengiriman'] = Pengiriman::first();
    //     return view('pengiriman.transaksi', $data);
    // }
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
