<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jumbotron extends Model
{
    use HasFactory;

    protected $table = 'jumbotron';

    protected $fillable = [
        'foto',
    ];

    protected $hidden = [];
}
