<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    use HasFactory;

    protected $table = "mobil";

    protected $filllable =[
        'nama_mobil',
        'cc',
        'tipe_mobil',
        'tahun_mobil',
        'nomor_polisi',
        'warna',
        'merk_id',
        'foto',
    ];
}
