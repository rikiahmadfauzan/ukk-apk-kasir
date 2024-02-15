<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    public function kategori_produk(){
        return $this->belongsTo(Produk::class, 'kategori_produk_id');
    }
    protected $table = 'produks';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_produk',
        'gambar_produk',
        'harga',
        'stok',
        'tanggal_kadaluarsa',
        'kategori_produk_id',
        'diskon_produk_id'

    ];
}
