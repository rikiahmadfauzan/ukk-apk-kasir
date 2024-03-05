<?php

namespace App\Http\Controllers;

use App\Models\DetailJual;
use App\Models\KategoriProduk;
use App\Models\Pelanggan;
use App\Models\Pengiriman;
use App\Models\Penjualan;
use App\Models\Produk;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DetailJualController extends Controller
{
    public function transaksi(Request $request){
        $data['kategori_produk'] = KategoriProduk::where('id', $request->id)->first();
        $data['produk'] = Produk::where('id', $request->id)->first();
        $data['pelanggan'] = Pelanggan::where('id', $request->id)->first();
        $data['detail_jual'] = DetailJual::where('penjualan_id', $request->penjualan_id)->get();
        $data['penjualan'] = Penjualan::where('penjualan_id', $request->penjualan_id)->first();
        $data['pengiriman'] = Pengiriman::where('id', $request->id)->first();
        return view('detail-jual.transaksi', $data);
    }

    public function detai_jual($id){
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
    public function detail(){
        // $data['produk'] = Produk::first();
        // $data['detail_jual'] = DetailJual::first();
        // $data['penjualan'] = Penjualan::first();
        // $data['pengiriman'] = Pengiriman::first();
        return view('detail-jual.detail');
    }
    // public function view(){
    //     $data['produk'] = Produk::all();
    //     $data['detail_jual'] = DetailJual::first();
    //     $data['penjualan'] = Penjualan::first();
    //     $data['pengiriman'] = Pengiriman::first();
    //     return view('pengiriman.transaksi', $data);
    // }
    public function index(){
        $data['penjualan_id'] = Penjualan::all();
        // $data['pelanggan'] = Pelanggan::all();
        $data['produk_id'] = Produk::all();
        $data['detail_jual'] = DetailJual::all();
         // Ambil semua produk dari database
        // $products = Product::all();

         // Tampilkan tampilan dengan produk yang tersedia
        //  return view('cart.index', compact('products'));
        return view('cart.index',$data);
    }
    public function create(Request $request){

        $penjualan = Penjualan::latest()->first();

        $produk = Produk::where('id', $request->id);
        $credentials = $request->validate([
            'jumlah_produk'=> 'required',
            'harga_jual'=> 'required',
            // 'penjualan_id'=> 'required',
            'produk_id'=> 'required'
        ]);

        DetailJual::create([
            'jumlah_produk'=> $request->jumlah_produk,
            'harga_jual'=> $request->harga_jual,
            'penjualan_id'=> $penjualan,
            'produk_id'=> $request->produk_id
        ]);
        return redirect('/detail-jual');
    }
    // public function update(Request $request){
    //     $credentials = $request->validate([
    //         'jumlah_produk'=> 'required',
    //         'harga_jual'=> 'required',
    //         // 'penjualan_id'=> 'required',
    //         // 'produk_id'=> 'required'
    //     ]);

    //     DetailJual::where('id', $request->id)->update($credentials);
    //     return redirect('/detail-jual');
    // }

    public function delete(Request $request){
        DetailJual::where('id', $request->id)->delete();
        return redirect('/detail-jual');

    }
    public function change(Request $request){
        $credentials = $request->validate([
            'status_pengiriman' => 'required'
        ]);

        Pengiriman::where('id', $request->id)->update($credentials);

        return redirect()->back();
    }
    public function addToCart($id)
    {
        $product = Produk::find($id);

        $cart = session()->get('cart');
    if(!$cart){
        $card=[
            $id =>[
                'nama_produk'=>$product->nama_produk,
                'gambar_produk'=>$product->gambar_produk,
                'harga'=>$product->harga,
                'jumlah_beli' => 1
            ]
        ];
            session()->put('cart',$card);
            return redirect()->back()->with('success','Product added to cart successfully!');
        }

        $cart[$id] = [
            'nama_produk'=>$product->nama_produk,
            'gambar_produk'=>$product->gambar_produk,
            'harga'=>$product->harga,
            'jumlah_beli' => 1
        ];

        session()->put('cart',$cart);

        // Redirect kembali ke halaman sebelumnya
        return redirect()->back()->with('success', 'Produk telah ditambahkan ke keranjang.');
    }

    public function checkout(Request $request)
    {
        Pelanggan::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            // 'alamat' => $request->alamat,
            // 'no_telpon' => $request->no_telpon,
            // 'pengguna_id' => $request->pengguna_id
        ]);
        // // Dapatkan produk yang ada di keranjang
        // $cart = $request->session()->get('cart');

        // // Lakukan proses checkout, misalnya hitung total, simpan transaksi, dll.

        // // Hapus produk dari keranjang setelah checkout
        // $request->session()->forget('cart');
        $pelanggan = Pelanggan::where('nama_pelanggan', $request->nama_pelanggan)->first();

        if(!isset($pelanggan)){
            $pelanggan = Pelanggan::create([
                'nama_pelanggan'=>$request->nama_pelanggan
            ]);
        }


        $penjualan = Penjualan::create([
            'tanggal_jual'=> Carbon::now(),
            'metode_pembayaran'=>$request->metode_pembayaran,
            'pelanggan_id'=>$pelanggan->id,
        ]);

        // $data = $request->all();

        // foreach($data['produk_id'] as $items){
        //     $data_array = array(
        //         'produk_id'=>$data['id_produk'][$items],
        //         'harga_jual'=>$data['harga_jual'][$items],
        //         // 'jumlah_beli'=>$data['jumlah_beli'][$items],
        //         'penjualan_id'=>$penjualan->id
        //     );

        //     Produk::create($data_array);
        // }

        return redirect('/clear');

        // Redirect atau tampilkan konfirmasi pembelian
        // return redirect('/detail-jual')->with('success', 'Transaksi berhasil.');
    }
    public function clearCart(){
        session()->forget('cart');
        return redirect()->back();
    }

}
