<?php

namespace Database\Seeders;

use App\Models\Gejala;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Gejala::insert(
                [
                    [
                        'keterangan' => 'Daun pisang menguning dimulai dari Daun yang lebih tua mulai dari tepi daun dan terus menguning melalui daun yang lebih muda'
                    ],

                    [
                        'keterangan' => 'Daun termuda hanya membuka sebagai daun terakhir'
                    ],

                    [
                        'keterangan' => 'Batang patah menguning dari tepi daun'
                    ],

                    [
                        'keterangan' => 'Warna Pipa berubah'
                    ],

                    [
                        'keterangan' => 'Lembaran Pemendekan dan perubahan warna bonggol pisang'
                    ],

                    [
                        'keterangan' => 'Bercak kecil pada daun dan berwarna coklat tua sampai yang mengumpul dengan jarak yang sama'
                    ],

                    [
                        'keterangan' => 'Pada daun ke-3 dan ke-4 dari pucuk sebagai bintik-bintik memanjang, berwarna kuning pucat dengan ukuran panjang 12 mm atau lebih, arahnya sejajar dengan tulang daun'
                    ],

                    [
                        'keterangan' => 'sertai timbul becak-becak jorong atau bulat telur membesar dan berwarna coklat pucat dengan tepi yang berwarna coklat kemerahan'
                    ],

                    [
                        'keterangan' => 'timbul becak-becak berbentuk berlian membesar dan berwarna coklat pucat dengan tepi yang berwarna coklat kemerahan'
                    ],

                    [
                        'keterangan' => 'Bintik-bintik kuning atau coklat muda berbentuk mata atau oval muncul di dekat tepi daun'
                    ],

                    [
                        'keterangan' => 'Zona utama dan zona tengah Itu berubah menjadi hitam dan secara bertahap menjadi lingkaran konsentris yang jelas di sepanjang pembuluh saat daun tumbuh'
                    ],

                    [
                        'keterangan' => 'becak-becak kecil pada daun, berwarna coklat tua sampai hitam, yang mengumpul dengan jarak yang hampir sama'
                    ],

                    [
                        'keterangan' => 'bercak-bercak klorosis berwarna putih kekuningan, yang bagian tengahnya berwarna coklat pada daun pisang'
                    ],

                    [
                        'keterangan' => 'pada mahkota baru tampak setelah timbulnya tandan buah'
                    ],

                    [
                        'keterangan' => 'Pemendekan ruas daun dengan daun-daun yang menyempit dan tegak, tepi daun biasanya menggulung dengan warna kekuningan'
                    ],

                    [
                        'keterangan' => 'bercak hijau gelap sepanjang tulang daun akan kelihatan jelas pada permukaan bawah daun apabila dilihat ke arah cahaya'
                    ]
                ]
            );
    }
}
