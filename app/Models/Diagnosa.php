<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kode_percobaan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function percobaan()
    {
        return $this->belongsTo(Percobaan::class, 'kode_percobaan', 'kode');
    }
}
