<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    // public function penjualan(){
    //     return $this->hasMany(Penjualan::class, 'id');
    // }
    use HasFactory;
    protected $table = 'pelanggans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_pelanggan',
        'alamat',
        'no_telpon',

    ];
}
