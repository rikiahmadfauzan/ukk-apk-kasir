<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    public function pelanggan(){
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }
 
    // public function produk(){
    //     return $this->belongsTo(Produk::class, 'produk_id');
    // }

    public function detail_jual(){
        return $this->hasMany(Penjualan::class, 'penjualan_id');
    }

    // public function detail_jual(){
    //     return $this->belongsTo(DetailJual::class, 'penjualan_id');
    // }
    protected $table = 'penjualans';
    protected $primarKey = 'id';
    protected $fillable = [
        'kode_penjualan',
        'tanggal_jual',
        'metode_pembayaran',
        'pelanggan_id',
    ];
}
