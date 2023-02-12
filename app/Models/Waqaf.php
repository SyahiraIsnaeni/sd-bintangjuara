<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waqaf extends Model
{
    use HasFactory;

    protected $table = 'waqaf';

    protected $fillable = [
        'nama_bank', 'nama_rekening', 'total_kebutuhan', 'dana_terkumpul', 'total_kekurangan'
    ];

    protected $hidden = [];
}
