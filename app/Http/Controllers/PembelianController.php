<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index(){
        $data['pembelian'] =  Pembelian::all();
        return view('pembelian.pembelian', $data);
    }
    public function create(Request $request){
        Pembelian::create([
            'tanggal_beli' => $request->tanggal_beli
        ]);

        return redirect('/pembelian');
    }

    public function update(Request $request){
        Pembelian::where('id', $request->id)->update([
            'tanggal_beli' => $request->tanggal_beli
        ]);
        return redirect('/pembelian');

    }

    public function delete(Request $request){
        Pembelian::where('id', $request->id)->delete();
        return redirect('/pembelian');

    }

}
