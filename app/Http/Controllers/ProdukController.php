<?php

namespace App\Http\Controllers;

use App\Models\DiskonProduk;
use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $data['produk'] = Produk::join('kategori_produks', 'kategori_produks.id', '=','produks.kategori_produk_id')
        ->join('diskon_produks', 'diskon_produks.id', '=', 'produks.diskon_produk_id')->get();
        return view('produk.produk',$data);
    }
    public function add(){
        $data['kategori_produk'] = KategoriProduk::all();
        $data['diskon'] = DiskonProduk::all();
        return view('produk.add-produk',$data);
    }
    public function create(Request $request){
        $produk = Produk::latest()->first();
        $kode_produk = "ALEX";
        $kode_tahun = date('Y');
        $kode_bulan = date('m');
        $kode_hari = date('d');
        if($produk == null){
            //kode awal
            $no_kode = '0001';
        }else{
            //kode berikutnya
            // $no_kode = substr($produk->kode_produk, 8, 4)+1;
            $explode = explode("/", $produk->kode_produk);
            $no_kode = intval($explode[4]+1);
            $no_kode = str_pad($no_kode, 4, '0', STR_PAD_LEFT);
        }
        // $kode = $kode_produk .'/'. $kode_tahun .'/'. $no_kode;
        $kode = "$kode_produk/$kode_tahun/$kode_bulan/$kode_hari/$no_kode";
        $credentials = $request->validate([
            // 'kode_produk' => 'required',
            'nama_produk' => 'required',
            'gambar_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'tanggal_kadaluarsa' => 'required',
            'kategori_produk_id' => 'required',
            'diskon_produk_id' => 'required'
        ]);
        Produk::create([
            'kode_produk' => $kode,
            'nama_produk' => $request->nama_produk,
            'gambar_produk' => $request->file('gambar_produk')->store('foto-produk'),
            'harga' => $request->harga,
            'stok' => $request->stok,
            'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,
            'kategori_produk_id' => $request->kategori_produk_id,
            'diskon_produk_id' => $request->diskon_produk_id
        ]);
        return redirect('/produk');
    }
}
