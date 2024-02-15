<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(){
        return view('pelanggan.create-pelanggan');
    }
    public function add(){
        return view('pelanggan.add-pelanggan');
    }
    public function view(){
        $data['pelanggan'] = Pelanggan::all();
        return view('pelanggan.data-pelanggan', $data);
    }
    public function create(Request $request){
        $credentials = $request->validate([
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required',
        ]);
       Pelanggan::create($credentials);
        return redirect('/pelanggan');
    }
}
