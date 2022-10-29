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
            ],

            [
                'kode' => 'K02',
                'hasil' => 'Bercak Daun Cercospora',
            ],

            [
                'kode' => 'K03',
                'hasil' => 'Bercak Daun Cordana',
            ],

            [
                'kode' => 'K04',
                'hasil' => 'Burik',
            ],

            [
                'kode' => 'K05',
                'hasil' => 'Layu Fusarium',
            ],

            [
                'kode' => 'K06',
                'hasil' => 'Layu Bakteri',
            ],

            [
                'kode' => 'K07',
                'hasil' => 'Kerdil Pisang',
            ],

            [
                'kode' => 'K08',
                'hasil' => 'Hama Penggerek Bonggol Pisang',
            ],

            [
                'kode' => 'K09',
                'hasil' => 'Hama Penggerek Batang Pisang',
            ],

            [
                'kode' => 'K10',
                'hasil' => 'Hama penggulung',
            ],

            [
                'kode' => 'K11',
                'hasil' => 'Hama Kudis Buah',
            ],

            [
                'kode' => 'K12',
                'hasil' => 'Serangan Nematoda',
            ],

            [
                'kode' => 'K13',
                'hasil' => 'Thrips ',
            ],
        ]);
    }
}
