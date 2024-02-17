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
    protected $table = 'penjualans';
    protected $primarKey = 'id';
    protected $fillable = [
        'tanggal_jual',
        'metode_pembayaran',
        'pelanggan_id',
    ];
}
