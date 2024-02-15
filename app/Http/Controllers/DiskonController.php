<?php

namespace App\Http\Controllers;

use App\Models\DiskonProduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class DiskonController extends Controller
{
    public function index(){
        $data['diskon_produk'] = DiskonProduk::all();
        return view('diskon.data-diskon', $data);
    }
    public function add(){
        $data['foto'] = Produk::all();
        return view('diskon.add-diskon',$data);
    }
    public function create(Request $request){
        $credentials = $request->validate([
            'nama_diskon' => 'required',
            'jenis_diskon' => 'required',
            'nilai_diskon' => 'required',
            'deskripsi' => 'required',
            'berlaku_mulai' => 'required',
            'berlaku_selesai' => 'required'
        ]);
        DiskonProduk::create($credentials);
        return redirect('/diskon');
    }
}
