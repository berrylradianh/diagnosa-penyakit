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
                    'url' => 'assets/img/layu-fusarium.jpg',
                    'nama' => 'Layu Fusarium',
                    'keterangan' => 'penyakit Panama yang disebabkan oleh jamur. Penyakit ini sulit dikendalikan, mudah bermigrasi dan dapat bertahan hidup di dalam tanah dalam waktu yang lama',
                    'solusi' => 'hindari menanam tanaman yang terinfeksi di daerah yang terkena jamur patogen, mengurangi insiden cedera akar dengan  mengendalikan nematoda dengan nematisida',
                ],

                [
                    'url' => 'assets/img/Cercospora.jpg',
                    'nama' => 'Bercak Daun Cercospora',
                    'keterangan' => 'Penyakit ini memiliki ciri-ciri yang berupa becak kecil pada daun dan berwarna coklat tua sampai yang mengumpul dengan jarak yang sama',
                    'solusi' => 'Tidak mengusahakan pisang secara komersial di lahan sempit,Kesuburan tanah harus dipertahankan dengan pemupukan yang tepat, Untuk  mengurangi sumber infeksi daun -daun mati di sekeliling pohon dipotong dan dibakar'
                ],

                [
                    'url' => 'assets/img/cordana.jpg',
                    'nama' => 'Bercak Daun Cordana',
                    'keterangan' => ' Penyakit tersebut datang di sertai timbul becak-becak jorong atau bulat telur, kadang berbentuk berlian, kemudian membesar dan berwarna coklat pucat, dengan tepi yang berwarna coklat kemerahan',
                    'solusi' => 'Tidak  menanam pisang di tempat teduh. . Jangan menanam pisang terlalu berdekatan serta mengatur jarak tanam yang tepat untuk menghindari naungan dan kontak daun, dan memastikan bahwa perkebunan berada jauh dari perkebunan yang terkena penyakit'
                ],

                [
                    'url' => 'assets/img/burik.jpg',
                    'nama' => 'Burik',
                    'keterangan' => 'Penyakit tersebut datang disertai berupa becak-becak kecil pada daun, berwarna coklat tua sampai hitam, yang mengumpul dengan jarak yang hampir sama',
                    'solusi' => 'Tanaman pisang dibersihkan dari daun-daun mati dan sisa-sisa bunga. Sehabis dipotong buah-buah segera diangkut ke ruang pemeraman atau ke gudang. Ruang pemeraman dan gudang dijaga kebersihannya'
                ],

                [
                    'url' => 'assets/img/antraknosa.jpg',
                    'nama' => 'Antraknosa',
                    'keterangan' => 'Penyakit ini ditandai terjadinya bercak-bercak klorosis berwarna putih kekuningan, yang bagian tengahnya berwarna coklat pada daun pisang, yang disebabkan Colletotrichum musae hidup di serasah daun atau serasah daun Busuk dan bahkan dalam buah, Spora dapat disebarkan oleh angin, air, dan serangga burung dan tikus makan pisang',
                    'solusi' => 'Tanaman pisang dibersihkan dari daun-daun mati dan sisa-sisa bunga, Sehabis dipotong buah-buah segera diangkut ke ruang pemeraman atau ke gudang, Ruang pemeraman dan gudang dijaga kebersihannya'
                ],

                [
                    'url' => 'assets/img/layu-bakteri.jpg',
                    'nama' => 'Layu Bakteri',
                    'keterangan' => 'Penyakit ini ditandai dengan gejala pada mahkota baru tampak setelah timbulnya tandan buah. di mulai satu atau dua daun (nomor 3 atau 4 dari daun termuda) berubah warnanya tanpa menunjukkan perubahan perubahan lain',
                    'solusi' => 'sanitasi lahan yaitu disarankan tidak melakukan tumpang sari atau menanam pisang di lahan bekas pertanaman tomat, jahe, terung, rimbang/takokak, meniran, leunca dan kelompok tomat-tomatan lainnya'
                ],

                [
                    'url' => 'assets/img/kerdil-pisang.jpg',
                    'nama' => 'Kerdil Pisang',
                    'keterangan' => 'Penyakit ini ditandai dengan gejala awal dari penyakit ini sulit terdeteksi. Serangan lanjut terlihat dengan gejala kerdil, pemendekan ruas daun dengan daun-daun yang menyempit dan tegak, tepi daun biasanya menggulung dengan warna kekuningan',
                    'solusi' => 'Jangan mengambil pisang atau heliconia dari pohon pisang yang kerdil'
                ],

                [
                    'url' => 'assets/img/penggerek.jpg',
                    'nama' => 'Hama Penggerek Bonggol Pisang',
                    'keterangan' => 'Hama ini disertai gejala serangan terlihat daun menguning dan ukuran tandan berkurang, perakaran tidak tumbuh normal,  akar serabut tidak tumbuh, ujung akar membusuk dan terdapat lubang seperti terowongan pada bonggol',
                    'solusi' => 'sanitasi lingkungan, menangkap kumbang dewasa dengan perangkap yang terbuat dari bonggol pisang, menggunakan musuh alami dan insektisida berbahan aktif karbofuran, monocrotophos'
                ],

                [
                    'url' => 'assets/img/batang.jpg',
                    'nama' => 'Hama Penggerek Batang Pisang ',
                    'keterangan' => 'Hama ini ditandai dengan tanaman tumbuh merana serta Pertumbuhan buah tidak normal dengan beberapa helaian daun mengering biasanya dari daun termuda karena pelepahnya dimakan serangga',
                    'solusi' => 'Sanitasi kebun, menggunakan musuh alami Plaesius javanicus dan penggunaan insektisida berbahan aktif'
                ],

                [
                    'url' => 'assets/img/penggulung.jpg',
                    'nama' => 'Hama penggulung',
                    'keterangan' => 'Hama ini ditandai dengan Lembaran daun robek dan menggulung dan gulungan daun mengering. Terdapat ulat berwarna putih kehijauan berbedak di dalam gulungan daun',
                    'solusi' => 'Pengendalian dilakukan memotong daun Kemudian dibakar. penggunaan pestisida Bahan aktif Kuinalfos dan Trichlorfon'
                ],

                [
                    'url' => 'assets/img/kudis.jpg',
                    'nama' => 'Hama Kudis Buah',
                    'keterangan' => 'Hama ini di tandai dengan kulit buah berkudis atau burik, terutama pada buah pada sisir paling bawah atau paling muda dan Terdapat kotoran pada sela-sela jari buah pada sisir buah yang terserang',
                    'solusi' => 'membungkus tandan buah saat bunga akan mekar.'
                ],

                [
                    'url' => 'assets/img/nematoda.jpg',
                    'nama' => 'Serangan Nematoda',
                    'keterangan' => 'Hama ini ditandai dengan Pertumbuhan buah tidak normal Perakaran tidak tumbuh normal, akar serabut tidak tumbuh, ujung akar membusuk',
                    'solusi' => 'Naikkan suhu tanah menjadi 50°C selama 30 menit dengan air hangat atau air panas. Rendam bibit pisang ke dalam air pada suhu 50 ° C selama beberapa menit. penggunaan nematisida karbofuran, Etrofos dan Oksanil digunakan selama penanaman dengan bahan aktif 12g bahan aktif per rumpun  yang di aplikasikan dalam satu rumpun dan diulang setiap 6 bulan'
                ],

                [
                    'url' => 'assets/img/thrips.jpg',
                    'nama' => 'Thrips ',
                    'keterangan' => 'Hama ini di tandai dengan menyerang bunga dan buah muda, akibatnya terdapat bintik-bintik dan goresan pada kulit buah yang telah tua. ',
                    'solusi' => 'Membungkus tandan buah saat bunga akan mekar dan penyaputan tangkai tandan dengan insektisida berbahan aktif monocrotophos'
                ],
            ]
        );
    }
}
