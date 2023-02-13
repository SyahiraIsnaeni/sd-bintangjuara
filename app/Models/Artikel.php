<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';

    protected $fillable = [
        'nama_penulis', 'judul', 'slug', 'body', 'gambar_artikel', 'is_active', 'delete'
    ];

    protected $hidden = [];

}
