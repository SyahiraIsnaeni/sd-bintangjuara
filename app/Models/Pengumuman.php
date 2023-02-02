<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    protected $table = 'pengumuman';

    protected $fillable = [
        'judul', 'slug', 'body', 'kategori_pengumuman_id', 'gambar_artikel', 'is_active', 'views'
    ];

    protected $hidden = [];

    public function kategori_pengumuman(){
        return $this->belongsTo(KategoriPengumuman::class, 'kategori_pengumuman_id', 'id');
    }
}
