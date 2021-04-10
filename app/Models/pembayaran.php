<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    protected $table="pembayarans";
    protected $fillable=[
        'id_petugas',
        'nisn',
        'bulan_dibayar',
        'tahun_dibayar',
        'jumlah_bayar',
        'id_spp'
    ];
}
