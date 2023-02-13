<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakta extends Model
{
    use HasFactory;

    protected $table = 'fakta';

    protected $fillable = [
        'jumlah_siswa', 'jumlah_guru', 'tahun_berjalan'
    ];

    protected $hidden = [];
}
