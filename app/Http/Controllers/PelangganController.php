<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function landing(){
        $data['produk'] = Produk::all();
        return view('pelanggan.landing',$data);
    }
    public function index(){
        $data['pelanggan'] = Pelanggan::all();
        $data['user'] = User::all();
        return view('pelanggan.data-pelanggan', $data);
    }
    public function add(){
        return view('pelanggan.add-pelanggan');
    }
    public function create(Request $request){
        $credentials = $request->validate([
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required',
            'user_id' => 'required',
        ]);
       Pelanggan::create($credentials);
        return redirect('/pelanggan');
    }
    public function update(Request $request){
        $credentials = $request->validate([
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required',
        ]);
       Pelanggan::where('id', $request->id)->update($credentials);
        return redirect('/pelanggan');
    }
    public function delete(Request $request){
       Pelanggan::where('id', $request->id)->delete();
        return redirect('/pelanggan');
    }

}
