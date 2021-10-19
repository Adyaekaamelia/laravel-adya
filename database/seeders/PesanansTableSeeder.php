<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PesanansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanans = [
          ['namapesanan'=>'makanan','namapelanggan'=>'Adya','barang'=>'roti','quality'=>'bagus','tgl_pesan'=>now()],
          ['namapesanan'=>'makanan manis','namapelanggan'=>'Amel','barang'=>'coklat','quality'=>'bagus','tgl_pesan'=>now()],
          ['namapesanan'=>'snack','namapelanggan'=>'iki','barang'=>'wafer','quality'=>'bagus','tgl_pesan'=>now()],
          ['namapesanan'=>'minuman','namapelanggan'=>'Adit','barang'=>'ice cream','quality'=>'bagus','tgl_pesan'=>now()],
          ['namapesanan'=>'makanan pedas','namapelanggan'=>'Api','barang'=>'dimsum','quality'=>'bagus','tgl_pesan'=>now()]

        ];
        DB::table('pesanans')->insert($pesanans);
    }
}
