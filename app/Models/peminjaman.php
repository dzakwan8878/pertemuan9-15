<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;

    protected $table ="peminjaman";

    protected $filllable = [
        'mobil_id',
        'user_id',
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'status_mobil',
        'lama_pinjaman',
    ];
}
