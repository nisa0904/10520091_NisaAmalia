<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';
    protected $fillable = [
        'nomor',
        'uraian',
        'kode',
        'satuan',
        'koefisien',
        'harga',
        'jumlah_harga'
    ];
}
