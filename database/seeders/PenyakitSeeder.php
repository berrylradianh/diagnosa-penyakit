<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Penyakit::insert(
            [
                [
                    'nama' => 'Layu Fusarium',
                    'keterangan' => 'penyakit Panama yang disebabkan oleh jamur. Penyakit ini sulit dikendalikan, mudah bermigrasi dan dapat bertahan hidup di dalam tanah dalam waktu yang lama' ,
                    'solusi' => 'hindari menanam tanaman yang terinfeksi di daerah yang terkena jamur patogen, mengurangi insiden cedera akar dengan  mengendalikan nematoda dengan nematisida',
                ],

                [
                    'nama' => 'Bercak Daun Cercospora',
                    'keterangan' => 'Penyakit ini memiliki ciri-ciri yang berupa becak kecil pada daun dan berwarna coklat tua sampai yang mengumpul dengan jarak yang sama',
                    'solusi' => 'Tidak mengusahakan pisang secara komersial di lahan sempit,Kesuburan tanah harus dipertahankan dengan pemupukan yang tepat, Untuk  mengurangi sumber infeksi daun -daun mati di sekeliling pohon dipotong dan dibakar'
                ],

                [
                    'nama' => 'Bercak Daun Cordana' ,
                    'keterangan' => ' Penyakit tersebut datang di sertai timbul becak-becak jorong atau bulat telur, kadang berbentuk berlian, kemudian membesar dan berwarna coklat pucat, dengan tepi yang berwarna coklat kemerahan',
                    'solusi' => 'Tidak  menanam pisang di tempat teduh. . Jangan menanam pisang terlalu berdekatan serta mengatur jarak tanam yang tepat untuk menghindari naungan dan kontak daun, dan memastikan bahwa perkebunan berada jauh dari perkebunan yang terkena penyakit'
                ],

                [
                    'nama' => 'Burik',
                    'keterangan' => 'Penyakit tersebut datang disertai berupa becak-becak kecil pada daun, berwarna coklat tua sampai hitam, yang mengumpul dengan jarak yang hampir sama' ,
                    'solusi' => 'Tanaman pisang dibersihkan dari daun-daun mati dan sisa-sisa bunga. Sehabis dipotong buah-buah segera diangkut ke ruang pemeraman atau ke gudang. Ruang pemeraman dan gudang dijaga kebersihannya'
                ],

                [
                    'nama' => 'Antraknosa' ,
                    'keterangan' => 'Penyakit ini ditandai terjadinya bercak-bercak klorosis berwarna putih kekuningan, yang bagian tengahnya berwarna coklat pada daun pisang, yang disebabkan Colletotrichum musae hidup di serasah daun atau serasah daun Busuk dan bahkan dalam buah, Spora dapat disebarkan oleh angin, air, dan serangga burung dan tikus makan pisang' ,
                    'solusi' => 'Tanaman pisang dibersihkan dari daun-daun mati dan sisa-sisa bunga, Sehabis dipotong buah-buah segera diangkut ke ruang pemeraman atau ke gudang, Ruang pemeraman dan gudang dijaga kebersihannya'
                ],

                [
                    'nama' => 'Layu Bakteri' ,
                    'keterangan' => 'Penyakit ini ditandai dengan gejala pada mahkota baru tampak setelah timbulnya tandan buah. di mulai satu atau dua daun (nomor 3 atau 4 dari daun termuda) berubah warnanya tanpa menunjukkan perubahan perubahan lain' ,
                    'solusi' => 'sanitasi lahan yaitu disarankan tidak melakukan tumpang sari atau menanam pisang di lahan bekas pertanaman tomat, jahe, terung, rimbang/takokak, meniran, leunca dan kelompok tomat-tomatan lainnya'
                ],

                [
                    'nama' => 'Kerdil Pisang' ,
                    'keterangan' =>'Penyakit ini ditandai dengan gejala awal dari penyakit ini sulit terdeteksi. Serangan lanjut terlihat dengan gejala kerdil, pemendekan ruas daun dengan daun-daun yang menyempit dan tegak, tepi daun biasanya menggulung dengan warna kekuningan',
                    'solusi' => 'Jangan mengambil pisang atau heliconia dari pohon pisang yang kerdil'
                ],
            ]
            );
    }
}
