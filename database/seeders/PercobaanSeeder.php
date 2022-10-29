<?php

namespace Database\Seeders;

use App\Models\Percobaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PercobaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Percobaan::insert([
            [
                'kode' => 'K01',
                'hasil' => 'Layu Bakteri',
                'penyakit_id' => 6
            ],

            [
                'kode' => 'K02',
                'hasil' => 'Bercak Daun Cercospora',
                'penyakit_id' => 2
            ],

            [
                'kode' => 'K03',
                'hasil' => 'Bercak Daun Cordana',
                'penyakit_id' => 3
            ],

            [
                'kode' => 'K04',
                'hasil' => 'Burik',
                'penyakit_id' => 4
            ],

            [
                'kode' => 'K05',
                'hasil' => 'Layu Fusarium',
                'penyakit_id' => 1
            ],

            [
                'kode' => 'K06',
                'hasil' => 'Layu Bakteri',
                'penyakit_id' => 6
            ],

            [
                'kode' => 'K07',
                'hasil' => 'Kerdil Pisang',
                'penyakit_id' => 7
            ],

            [
                'kode' => 'K08',
                'hasil' => 'Hama Penggerek Bonggol Pisang',
                'penyakit_id' => 8
            ],

            [
                'kode' => 'K09',
                'hasil' => 'Hama Penggerek Batang Pisang',
                'penyakit_id' => 9
            ],

            [
                'kode' => 'K10',
                'hasil' => 'Hama penggulung',
                'penyakit_id' => 10
            ],

            [
                'kode' => 'K11',
                'hasil' => 'Hama Kudis Buah',
                'penyakit_id' => 11
            ],

            [
                'kode' => 'K12',
                'hasil' => 'Serangan Nematoda',
                'penyakit_id' => 12
            ],

            [
                'kode' => 'K13',
                'hasil' => 'Thrips ',
                'penyakit_id' => 13
            ],
        ]);
    }
}
