<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatan';

    protected $fillable = [
        'nama_penulis', 'judul', 'slug', 'body', 'kategori_kegiatan_id', 'gambar_artikel', 'is_active', 'delete'
    ];

    protected $hidden = [];

    public function kategori_kegiatan(){
        return $this->belongsTo(KategoriKegiatan::class, 'kategori_kegiatan_id', 'id');
    }
}
