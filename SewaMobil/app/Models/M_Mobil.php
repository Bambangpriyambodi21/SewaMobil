<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class M_Mobil extends Model
{
    use softDeletes;

    protected $table = 'mobil';
    protected $fillable = [
        'merek',
        'model',
        'no_plat',
        'tarif',
        'ketersediaan'
    ];

    protected $hidden;
}
