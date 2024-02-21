<?php

namespace App\Http\Controllers;

use App\Models\DetailBeli;
use App\Models\Pembelian;
use App\Models\Produk;
use Illuminate\Http\Request;

class DetailBeliController extends Controller
{
    public function index(){
        $data['produk'] = Produk::all();
        $data['pembelian'] = Pembelian::all();
        $data['detail_beli'] = DetailBeli::all();
        return view('detail-beli.detai-beli', $data);
    }
    public function update(Request $request){
        $credential = $request->validate([
            'tanggal_beli' => 'required',
        ]);

        Pembelian::where('id', $request->id)->update($credential);

        return redirect('pembelian');
    }
}
