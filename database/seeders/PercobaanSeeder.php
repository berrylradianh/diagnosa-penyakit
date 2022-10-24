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
                'hasil' => 'Antraknosa',
            ],
            [
                'kode' => 'K03',
                'hasil' => 'Burik',
            ],
            [
                'kode' => 'K04',
                'hasil' => 'Bercak Daun Cordana',
            ],
        ]);
    }
}
