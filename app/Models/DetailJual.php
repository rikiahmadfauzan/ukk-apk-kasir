<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailJual extends Model
{
    use HasFactory;
    public function produk(){
        return $this->belongsTo(Produk::class, 'produk_id');
    }
    public function penjualan(){
        return $this->belongsTo(Penjualan::class, 'penjualan_id');
    }
    // public function detail_jual(){
    //     return $this->belongsTo(Penjualan::class, 'penjualan_id');
    // }

    protected $table = 'detail_juals';
    protected $primaryKey = 'id';
    protected $fillable = [
        'jumlah_produk',
        'harga_jual',
        'penjualan_id',
        'produk_id'
    ];
}
