<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabel_penjualan extends Model
{
    use HasFactory;

    protected $table = 'tabel_penjualan';
    protected $guarded = [];
    // protected $fillable = ([
    //     'plat', 'jumlah_orang', 'harga', 'total_harga'
    // ]);
}
