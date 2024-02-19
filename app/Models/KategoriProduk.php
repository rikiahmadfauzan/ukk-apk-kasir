<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;
    // public function produk(){
    //     return $this->hasMany(KategoriProduk::class, 'kategori_produk_id');
    // }
    public function kategori_produk(){
        return $this->hasMany(KategoriProduk::class, 'kategori_produk_id');
    }
    protected $table = 'kategori_produks';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_kategori',
        'status'
    ];
}
