<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Percobaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'hasil'
    ];

    public function percobaan_has_gejalas()
    {
        return $this->hasMany(PercobaanHasGejala::class, 'kode_percobaan', 'kode');
    }

    public function has_gejala(string $kode_gejala)
    {
        foreach ($this->percobaan_has_gejalas as $phg) {
            if ($phg->kode_gejala == $kode_gejala) {
                return true;
            }
        }

        return false;
    }

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }
}
