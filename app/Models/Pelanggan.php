<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    public function penjualan(){
        return $this->hasMany(Pelanggan::class, 'pelanggan_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    protected $table = 'pelanggans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_pelanggan',
        'alamat',
        'no_telpon',
        'user_id'

    ];
}
