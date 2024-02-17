<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index(){
        $data['penjualan'] = Penjualan::all();
        $data['pelanggan'] = Pelanggan::all();
        return view('penjualan.penjualan', $data);
    }
    public function create(Request $request){
        $credentials = $request->validate([
            'pelanggan_id' => 'required',
            'metode_pembayaran' => 'required',
            'tanggal_jual' => 'required'
        ]);
        Penjualan::create($credentials);
        return redirect('/penjualan');
    }
    public function update(Request $request){
        $credentials = $request->validate([
            // 'pelanggan_id' => 'required',
            'metode_pembayaran' => 'required',
            'tanggal_jual' => 'required'
        ]);
        Penjualan::where('pelanggan_id', $request->pelanggan_id)->update($credentials);
        return redirect('/penjualan');
    }
    public function delete(Request $request){
        Penjualan::where('id', $request->id)->delete();
        return redirect('/penjualan');
    }
}
