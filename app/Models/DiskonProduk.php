<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiskonProduk extends Model
{
    use HasFactory;
    public function produk(){
        return $this->hasMany(DiskonProduk::class, 'diskon_produk_id');
    }
    protected $table = 'diskon_produks';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_diskon',
        'jenis_diskon',
        'nilai_diskon',
        'deskripsi',
        'berlaku_mulai',
        'berlaku_selesai'
    ];
}
