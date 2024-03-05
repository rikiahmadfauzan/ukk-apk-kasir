<?php

namespace App\Http\Controllers;

use App\Models\DetailJual;
use App\Models\Pelanggan;
use App\Models\Penjualan;
use App\Models\Produk;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function  index() {
        $data['produk'] = Produk::get();
        return view('cart.index', $data);

    }


    public function addToCart($id){
        $product = Produk::find($id);
        if ( !$product ){
            abort(404);
        }

        $cart = session()->get('cart');



        $cart[$id] = [
            'nama_produk'=>$product->nama_produk,
            'gambar_produk'=>$product->gambar_produk,
            'harga'=>$product->harga,
            'stok'=>$product->stok,
            'kategori_produk_id'=>$product->kategori_produk_id,
            'diskon_produk_id'=>$product->diskon_produk_id,
        ];

        session()->put('cart',$cart);

        if(request()->wantsJson()) {
            return response()->json(['message' => 'Product added to cart successfully!']);
        }

        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }

    public function removeCartItem(Request $request)
    {
        if ($request->id) {

            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

    public function clearCart(){
        session()->forget('cart');
        return redirect()->back();
    }


    public function checkout(Request $request){
        //kode penjualan
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
        //end kode penjualan//

        //Pelanggan
        $pelanggan = Pelanggan::where('nama_pelanggan', $request->nama_pelanggan)->first();


        if(!isset($pelanggan)){
            $pelanggan = Pelanggan::create([
                'nama_pelanggan'=>$request->nama_pelanggan
            ]);
        }

        $data = $request->all();


        $penjualan_id = Penjualan::create([
            'kode_penjualan' => $kode,
            'tanggal_jual' => Carbon::now(),
            'metode_pembayaran'=> $request->metode_pembayaran,
            'pelanggan_id' => $pelanggan->id
        ]);

        foreach($data['produk_id'] as $items => $value){
            $data_array = array(
                'produk_id'=>$data['produk_id'][$items],
                'jumlah_produk'=>$data['jumlah_produk'][$items],
                'harga_jual'=>$data['harga_jual'][$items],
                'penjualan_id'=>$penjualan_id->id
            );

            DetailJual::create($data_array);
        }

        return redirect('/clear-cart');


    }
}
