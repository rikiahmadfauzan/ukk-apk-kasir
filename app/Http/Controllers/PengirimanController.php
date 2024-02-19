<?php

namespace App\Http\Controllers;

use App\Models\DetailJual;
use App\Models\Pelanggan;
use App\Models\Pengiriman;
use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    //  public function transaksi(){
    //     $data['produk'] = Produk::first();
    //     $data['detail_jual'] = DetailJual::first();
    //     $data['penjualan'] = Penjualan::first();
    //     $data['pengiriman'] = Pengiriman::first();
    //     return view('pengiriman.transaksi', $data);
    // }
    public function index(){
        $data['penjualan'] = Penjualan::all();
        $data['pengiriman'] = Pengiriman::all();
        return view('pengiriman.pengiriman', $data);
    }

    public function create(Request $request){
        $pengiriman = Pengiriman::latest()->first();
        $kode_pengiriman = "ALX";
        $kode_tahun = date('Y');
        // $kode_bulan = date('m');
        // $kode_hari = date('d');
        if($pengiriman == null){
            //kode awal
            $no_kode = '0001';
        }else{
            //kode berikutnya
            // $no_kode = substr($produk->kode_produk, 8, 4)+1;
            $explode = explode("/", $pengiriman->kode_pengiriman);
            $no_kode = intval($explode[2]+1);
            $no_kode = str_pad($no_kode, 4, '0', STR_PAD_LEFT);
        }
        // $kode = $kode_produk .'/'. $kode_tahun .'/'. $no_kode;
        $kode = "$kode_pengiriman/$kode_tahun/$no_kode";
        $credentials = $request->validate([
            // 'status_pengiriman' => 'required'
            'biaya_pengiriman' => 'required',
            'tanggal_pengiriman' => 'required',
            'penjualan_id' => 'required',
        ]);

        Pengiriman::create([
            'kode_pengiriman' => $kode,
            'biaya_pengiriman' => $request->biaya_pengiriman,
            'tanggal_pengiriman' => $request->tanggal_pengiriman,
            'penjualan_id' => $request->penjualan_id,
        ]);

        return redirect('/pengiriman');
    }
    public function update(Request $request){
        $credentials = $request->validate([
            'status_pengiriman' => 'required'
        ]);

        Pengiriman::where('id', $request->id)->update($credentials);

        return redirect('/pengiriman');
    }
    // public function change(Request $request){
    //     $credentials = $request->validate([
    //         'status_pengiriman' => 'required'
    //     ]);

    //     Pengiriman::where('id', $request->id)->update($credentials);

    //     return redirect()->back();
    // }
}
