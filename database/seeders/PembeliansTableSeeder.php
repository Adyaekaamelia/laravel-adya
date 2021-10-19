<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PembeliansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelians =[
['namapembelian'=>'makanan','barang'=>'roti','namasuplier'=>'Adya','quality'=>'bagus','tgl'=>now()],
['namapembelian'=>'makanan manis','barang'=>'coklat','namasuplier'=>'Amel','quality'=>'bagus','tgl'=>now()],
['namapembelian'=>'snack','barang'=>'wafer','namasuplier'=>'Adit','quality'=>'bagus','tgl'=>now()],
['namapembelian'=>'minuman','barang'=>'ice cream','namasuplier'=>'Iki','quality'=>'bagus','tgl'=>now()],
['namapembelian'=>'makanan pedas','barang'=>'dimsum','namasuplier'=>'Api','quality'=>'bagus','tgl'=>now()]
        ];
         DB::table('pembelians')->insert($pembelians);
    }
}
