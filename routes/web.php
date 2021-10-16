<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', function () {
    return 'Adya Eka Amelia <br>
    13 Maret 2004 <br>
    Cirebon <br>
    Smk Assalaam Bandung <br>
    Umur 17 tahun <br>
    Perempuan';
});

// parameter
Route::get('/input/{nama}/{ttl}/{sekolah}/{umur}/{jk}', function ($nama, $ttl, $sekolah, $umur, $jk) {
    echo "Nama Saya : " . $nama;
    echo "<br>tempat tanggal lahir : " . $ttl;
    echo "<br>Sekolah : " . $sekolah;
    echo "<br>jenis kelamin : " . $jk;
    echo "<br>Umur : " . $umur;
});

// optional parameter
Route::get('/optional/{nama}/{usia?}', function ($nama, $usia = 17) {
    echo "Nama saya  : " . $nama;
    echo "<br>Usia saya  : " . $usia;
});

// latihan
Route::get('/ujian/{nama}/{kelas}/{mtk?}/{indo?}/{inggris?}/{rpl?}', function ($nama, $kelas, $mtk = 0, $indo = 0, $inggris = 0, $rpl = 0) {
    echo "Nama  : " . $nama;
    echo "<br>Kelas : " . $kelas;
    echo "<br>Nilai Matematika : " . $mtk;
    echo "<br>Nilai Indonesia : " . $indo;
    echo "<br>Nilai Inggris : " . $inggris;
    echo "<br>Nilai Produktif : " . $rpl;
    echo "<br>Rata - rata : " . ($mtk + $indo + $inggris + $rpl) / 4;
});

Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null, $minuman = null, $cemilan = null) {

        if ($makanan) {
            echo "Anda Memesan  <br>";
            echo "Makanan : " . $makanan . "<br>";
            if ($makanan = $minuman) {
                echo "Minuman : " . $minuman . "<br>";
                    if ($minuman = $cemilan) {
                        echo "Cemilan : " . $cemilan;
                }
            }
        } else {
              echo "Anda Tidak Memesan, Silahkan pulang";
        }

    });


Route::get('/hal2', function () {
    $nama = "Adya";
    $kelas = "Rpl";
    $sekolah = "SMK Assalaam Bandung";
    $ttl = "Cirebon,13 maret 2004";
    $umur = "17 tahun";
    return view('halo', compact('nama','kelas','sekolah','ttl','umur'));
});


// optional parameter post
Route::get('posting/{nama?}/{kelas?}/{jk?}', function($nama=null, $kelas=null, $jk=null){
    return view('post', [
        'a' => $nama,
        'b' => $kelas,
        'c' => $jk
     ]);
});

// array
Route::get('blog', function(){
    $data = [
        ['id' => 1, 'title' => 'Olahraga', 'content' => 'Sepak Bola'],
        ['id' => 2, 'title' => 'Ekonomi', 'content' => 'Hutang RI ke Luar Negeri'],

    ];
    return view('blog', compact('data'));
});

Route::get('data', function(){
    $data = [
        ['nis' => 12345, 'nama' => 'Adya', 'jk' => 'Perempuan', 'jurusan' => 'Rpl', 'kelas' => 12, 'walikel' => 'Herna'],
        ['nis' => 67890, 'nama' => 'Eka', 'jk' => 'Laki-laki', 'jurusan' => 'Rpl', 'kelas' => 12, 'walikel' => 'Herna'],
        ['nis' => 99876, 'nama' => 'Amel', 'jk' => 'Perempuan', 'jurusan' => 'Rpl', 'kelas' => 11, 'walikel' => 'Ani'],
        ['nis' => 54321, 'nama' => 'Kaka', 'jk' => 'Perempuan', 'jurusan' => 'Tkj', 'kelas' => 12, 'walikel' => 'Ida'],
        ['nis' => 84367, 'nama' => 'Irma', 'jk' => 'Perempuan', 'jurusan' => 'Tkj', 'kelas' => 12, 'walikel' => 'Ida'],
        ['nis' => 87422, 'nama' => 'Dora', 'jk' => 'Perempuan', 'jurusan' => 'Tkj', 'kelas' => 12, 'walikel' => 'Ida'],
        ['nis' => 89753, 'nama' => 'Iki', 'jk' => 'Laki-laki', 'jurusan' => 'Tsm', 'kelas' => 12, 'walikel' => 'Jaja'],
        ['nis' => 65322, 'nama' => 'Randi', 'jk' => 'Laki-laki', 'jurusan' => 'Tsm', 'kelas' => 12, 'walikel' => 'Jaja'],
        ['nis' => 98763, 'nama' => 'Ido', 'jk' => 'Laki-laki', 'jurusan' => 'Tkr', 'kelas' => 12, 'walikel' => 'Ujang'],
        ['nis' => 12458, 'nama' => 'Ali', 'jk' => 'Laki-laki', 'jurusan' => 'Tkr', 'kelas' => 12, 'walikel' => 'Ujang']


    ];
    return view('data-siswa', compact('data'));
});

Route::get('siswa', function () {
    $siswas = [
        ['id' => 1,
        'nama' => 'Adya',
        'username' => 'adya',
        'email' => 'adya13@gmail.com',
        'alamat' => 'Bandung',
        'mapel' => [
                    'mapel1' => 'Bahasa Indonesia',
                    'mapel2' => 'Bahasa Inggris',
                    'mapel3' => 'Bahasa jepang',
        ]
        ],
        ];
    return view('siswa', compact('siswas'));
});

// hobi
Route::get('hobi', function () {
    $data = [
        ['nis' => 1001,
        'nama' => 'Adya',
        'kelas' => '12 RPL 1',
        'hobii' => [
                    'hobi1' => 'Memasak',
                    'hobi2' => 'Makan',
                    'hobi3' => 'Rebahan',
        ]
        ],
        ['nis' => 1002,
        'nama' => 'Amel',
        'kelas' => '12 RPL 1',
        'hobii' => [
                    'hobi1' => 'Berenang',
                    'hobi2' => 'Makan',
                    'hobi3' => 'Membaca',
        ]
        ],

        ];
    return view('hobi', compact('data'));
});


//post
Route::get('/testmodel', function() {
$query = App\Models\Post::all();
return $query;
});

Route::get('/test-post', function() {
$query = App\Models\Post::all();
return view('test-post', compact('query'));
});


//biodata
Route::get('/biodata', function() {
$query = App\Models\biodata::all();
return $query;
});

Route::get('/test-biodata', function() {
$query = App\Models\biodata::all();
return view('test-biodata', compact('query'));
});
