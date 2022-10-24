<?php

namespace Database\Seeders;

use App\Models\PercobaanHasGejala;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PercobaanHasGejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PercobaanHasGejala::insert([
            [
                'kode_percobaan' => 'K01',
                'kode_gejala' => 'G01',
            ],
            [
                'kode_percobaan' => 'K01',
                'kode_gejala' => 'G03',
            ],
            [
                'kode_percobaan' => 'K02',
                'kode_gejala' => 'G03',
            ],
            [
                'kode_percobaan' => 'K03',
                'kode_gejala' => 'G02',
            ],
            [
                'kode_percobaan' => 'K03',
                'kode_gejala' => 'G04',
            ],
            [
                'kode_percobaan' => 'K04',
                'kode_gejala' => 'G03',
            ],
            [
                'kode_percobaan' => 'K04',
                'kode_gejala' => 'G04',
            ],
        ]);
    }
}
