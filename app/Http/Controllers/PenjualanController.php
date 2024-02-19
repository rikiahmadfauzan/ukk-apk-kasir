<?php

namespace App\Http\Controllers;

use App\Models\DetailJual;
use App\Models\Pelanggan;
use App\Models\Pengiriman;
use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
  
    public function transaksi(){
        $data['produk'] = Produk::first();
        $data['detail_jual'] = DetailJual::first();
        $data['penjualan'] = Penjualan::first();
        $data['pengiriman'] = Pengiriman::first();
        return view('pengiriman.transaksi', $data);
    }
    public function index(){
        $data['produk'] = Produk::all();
        $data['detail_jual'] = DetailJual::all();
        $data['pelanggan'] = Pelanggan::all();
        $data['penjualan'] = Penjualan::all();
        return view('penjualan.penjualan', $data);
    }
    public function create(Request $request){
        $penjualan = Penjualan::latest()->first();
        $kode_penjualan = "PYSCHO";
        $kode_tahun = date('Y');
        $kode_bulan = date('m');
        $kode_hari = date('d');
        if($penjualan == null){
            //kode awal
            $no_kode = '0001';
        }else{
            //kode berikutnya
            // $no_kode = substr($produk->kode_produk, 8, 4)+1;
            $explode = explode("/", $penjualan->kode_penjualan);
            $no_kode = intval($explode[4]+1);
            $no_kode = str_pad($no_kode, 4, '0', STR_PAD_LEFT);
        }
        // $kode = $kode_produk .'/'. $kode_tahun .'/'. $no_kode;
        $kode = "$kode_penjualan/$kode_tahun/$kode_bulan/$kode_hari/$no_kode";
        $credentials = $request->validate([
            // 'kode_penjualan' => 'required',
            'pelanggan_id' => 'required',
            'metode_pembayaran' => 'required',
            'tanggal_jual' => 'required',
            // 'jumlah_produk' => 'required',
            // 'harga_jual' => 'required',
            // 'penjualan_id' => 'required',
            // 'produk_id' => 'required'
        ]);
        // $penjualan = Penjualan::create([
        //     'pelanggan_id' => $request->pelanggan_id,
        //     'metode_pembayaran' => $request->metode_pembayaran,
        //     'tanggal_jual' => $request->tanggal_jual
        // ]);
        // $penjualan_id = Penjualan::where('id', $request->id);
        // if($penjualan){
        //     DetailJual::create([
        //         'jumlah_produk' => $request->jumlah_produk,
        //         'harga_jual' => $request->harga_jual,
        //         'penjualan_id' => $penjualan_id,
        //         'produk_id' => $request->produk_id
        //     ]);
        // }
        Penjualan::create([
            'kode_penjualan' => $kode,
            'pelanggan_id' => $request->pelanggan_id,
            'metode_pembayaran' => $request->metode_pembayaran,
            'tanggal_jual' => $request->tanggal_jual
        ]);
        return redirect('/penjualan');
    }
    public function update(Request $request){
        $credentials = $request->validate([
            // 'pelanggan_id' => 'required',
            'metode_pembayaran' => 'required',
            // 'penjualan_id' => 'required'
        ]);
        Penjualan::where('pelanggan_id', $request->pelanggan_id)->update($credentials);
        return redirect('/penjualan');
    }
    public function delete(Request $request){
        Penjualan::where('id', $request->id)->delete();
        return redirect('/penjualan');
    }
}
