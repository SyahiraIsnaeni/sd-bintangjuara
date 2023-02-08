<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';

    protected $fillable = [
        'judul', 'slug', 'body', 'kategori_berita_id', 'gambar_berita', 'is_active', 'delete'
    ];

    protected $hidden = [];

    public function kategori_berita(){
        return $this->belongsTo(KategoriBerita::class, 'kategori_berita_id', 'id');
    }
}
