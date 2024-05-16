<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class M_Pengembalian extends Model
{
    use softDeletes;

    protected $table = 'pengembalian';
    protected $fillable = [
        'id_pengguna',
        'no_plat',
        'jml_hari',
        'jml_harga'
    ];

    protected $hidden;
}
