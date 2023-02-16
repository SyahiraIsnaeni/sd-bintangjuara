<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPengumuman extends Model
{
    use HasFactory;

    protected $table = 'kategori_pengumuman';

    protected $fillable = [
        'nama_kategori', 'slug',
    ];

    protected $hidden = [];
}
