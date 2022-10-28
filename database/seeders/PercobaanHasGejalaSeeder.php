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
                'kode_gejala' => 'G02',
            ],

            [
                'kode_percobaan' => 'K01',
                'kode_gejala' => 'G03',
            ],

            [
                'kode_percobaan' => 'K01',
                'kode_gejala' => 'G04',
            ],

            [
                'kode_percobaan' => 'K01',
                'kode_gejala' => 'G05',
            ],

            [
                'kode_percobaan' => 'K02',
                'kode_gejala' => 'G06',
            ],

            [
                'kode_percobaan' => 'K02',
                'kode_gejala' => 'G07',
            ],

            [
                'kode_percobaan' => 'K03',
                'kode_gejala' => 'G08',
            ],

            [
                'kode_percobaan' => 'K03',
                'kode_gejala' => 'G09',
            ],

            [
                'kode_percobaan' => 'K03',
                'kode_gejala' => 'G10',
            ],

            [
                'kode_percobaan' => 'K03',
                'kode_gejala' => 'G11',
            ],

            [
                'kode_percobaan' => 'K04',
                'kode_gejala' => 'G12',
            ],

            [
                'kode_percobaan' => 'K05',
                'kode_gejala' => 'G13',
            ],

            [
                'kode_percobaan' => 'K06',
                'kode_gejala' => 'G14',
            ],

            [
                'kode_percobaan' => 'K07',
                'kode_gejala' => 'G15',
            ],

            [
                'kode_percobaan' => 'K07',
                'kode_gejala' => 'G16',
            ],

            [
                'kode_percobaan' => 'K08',
                'kode_gejala' => 'G17',
            ],

            [
                'kode_percobaan' => 'K08',
                'kode_gejala' => 'G18',
            ],

            [
                'kode_percobaan' => 'K08',
                'kode_gejala' => 'G19',
            ],

            [
                'kode_percobaan' => 'K08',
                'kode_gejala' => 'G20',
            ],

            [
                'kode_percobaan' => 'K09',
                'kode_gejala' => 'G21',
            ],

            [
                'kode_percobaan' => 'K10',
                'kode_gejala' => 'G22',
            ],

            [
                'kode_percobaan' => 'K10',
                'kode_gejala' => 'G23',
            ],

            [
                'kode_percobaan' => 'K11',
                'kode_gejala' => 'G24',
            ],

            [
                'kode_percobaan' => 'K11',
                'kode_gejala' => 'G25',
            ],

            [
                'kode_percobaan' => 'K12',
                'kode_gejala' => 'G26',
            ],

            [
                'kode_percobaan' => 'K13',
                'kode_gejala' => 'G27',
            ],
        ]);
    }
}
