<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    public function produk(){
        return $this->hasMany(Produk::class, 'produk_id');
    }
    public function kategori_produk(){
        return $this->belongsTo(KategoriProduk::class, 'kategori_produk_id');
    }
    // public function produk(){
    //     return $this->belongsTo(DiskonProduk::class, 'diskon_produk_id');
    // }
    public function diskon_produk(){
        return $this->belongsTo(DiskonProduk::class, 'diskon_produk_id');
    }
    public function detail_jual(){
        return $this->hasMany(Produk::class, 'produk_id');
    }
    public function detail_beli(){
        return $this->hasMany(Produk::class, 'produk_id');
    }
    protected $table = 'produks';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kode_produk',
        'nama_produk',
        'gambar_produk',
        'harga',
        'stok',
        'tanggal_kadaluarsa',
        'kategori_produk_id',
        'diskon_produk_id'

    ];
}
