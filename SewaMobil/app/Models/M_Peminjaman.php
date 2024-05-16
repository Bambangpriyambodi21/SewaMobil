<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class M_Peminjaman extends Model
{
    use softDeletes;

    protected $table = 'peminjaman';
    protected $fillable = [
        'id_pengguna',
        'tgl_mulai',
        'tgl_selesai',
        'mobil'
    ];

    protected $hidden;
}
