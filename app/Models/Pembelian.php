<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    public function detail_beli(){
        return $this->hasMany(Pembelian::class, 'pembelian_id');
    }
    protected $table = 'pembelians';
    protected $primaryKey = 'id';
    protected $fillable = [
      'tanggal_beli'

    ];

}
