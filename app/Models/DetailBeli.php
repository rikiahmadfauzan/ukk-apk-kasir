<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBeli extends Model
{
    use HasFactory;
    public function produk(){
        return $this->belongsTo(Produk::class, 'produk_id');
    }
    public function pembelian(){
        return $this->belongsTo(Pembelian::class, 'pembelian_id');
    }
    protected $table = 'detail_belis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'harga_beli',
        'jumlah_beli',
        'pembelian_id',
        'produk_id'
    ];
}
