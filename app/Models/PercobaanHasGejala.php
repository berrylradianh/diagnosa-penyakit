<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PercobaanHasGejala extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_percobaan',
        'kode_gejala'
    ];
}
