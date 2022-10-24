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
        Gejala::insert(
            [
                [
                    'kode' => 'G01',
                    'keterangan' => 'Daun pisang menguning dimulai dari Daun yang lebih tua mulai dari tepi daun dan terus menguning melalui daun yang lebih muda'
                ],

                [
                    'kode' => 'G02',
                    'keterangan' => 'Daun termuda hanya membuka sebagai daun terakhir'
                ],

                [
                    'kode' => 'G03',
                    'keterangan' => 'Batang patah menguning dari tepi daun'
                ],

                [
                    'kode' => 'G04',
                    'keterangan' => 'Warna Pipa berubah'
                ],

                [
                    'kode' => 'G05',
                    'keterangan' => 'Lembaran Pemendekan dan perubahan warna bonggol pisang'
                ],

                [
                    'kode' => 'G06',
                    'keterangan' => 'Bercak kecil pada daun dan berwarna coklat tua sampai yang mengumpul dengan jarak yang sama'
                ],

                [
                    'kode' => 'G07',
                    'keterangan' => 'Pada daun ke-3 dan ke-4 dari pucuk sebagai bintik-bintik memanjang, berwarna kuning pucat dengan ukuran panjang 12 mm atau lebih, arahnya sejajar dengan tulang daun'
                ],

                [
                    'kode' => 'G08',
                    'keterangan' => 'sertai timbul becak-becak jorong atau bulat telur membesar dan berwarna coklat pucat dengan tepi yang berwarna coklat kemerahan'
                ],

                [
                    'kode' => 'G09',
                    'keterangan' => 'timbul becak-becak berbentuk berlian membesar dan berwarna coklat pucat dengan tepi yang berwarna coklat kemerahan'
                ],

                [
                    'kode' => 'G10',
                    'keterangan' => 'Bintik-bintik kuning atau coklat muda berbentuk mata atau oval muncul di dekat tepi daun'
                ],

                [
                    'kode' => 'G11',
                    'keterangan' => 'Zona utama dan zona tengah Itu berubah menjadi hitam dan secara bertahap menjadi lingkaran konsentris yang jelas di sepanjang pembuluh saat daun tumbuh'
                ],

                [
                    'kode' => 'G12',
                    'keterangan' => 'becak-becak kecil pada daun, berwarna coklat tua sampai hitam, yang mengumpul dengan jarak yang hampir sama'
                ],

                [
                    'kode' => 'G13',
                    'keterangan' => 'bercak-bercak klorosis berwarna putih kekuningan, yang bagian tengahnya berwarna coklat pada daun pisang'
                ],

                [
                    'kode' => 'G14',
                    'keterangan' => 'pada mahkota baru tampak setelah timbulnya tandan buah'
                ],

                [
                    'kode' => 'G15',
                    'keterangan' => 'Pemendekan ruas daun dengan daun-daun yang menyempit dan tegak, tepi daun biasanya menggulung dengan warna kekuningan'
                ],

                [
                    'kode' => 'G16',
                    'keterangan' => 'bercak hijau gelap sepanjang tulang daun akan kelihatan jelas pada permukaan bawah daun apabila dilihat ke arah cahaya'
                ]
            ]
        );
    }
}
