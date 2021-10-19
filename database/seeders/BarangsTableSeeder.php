<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
['nama'=>'roti','varian'=>'strowbery','harga_beli'=>10000,'harga_jual'=>11000],
['nama'=>'coklat','varian'=>'green tea','harga_beli'=>15000,'harga_jual'=>15000],
['nama'=>'wafer','varian'=>'coklat','harga_beli'=>5000,'harga_jual'=>7000],
['nama'=>'ice cream','varian'=>'boba','harga_beli'=>15000,'harga_jual'=>15000],
['nama'=>'dimsum','varian'=>'ayam','harga_beli'=>20000,'harga_jual'=>20000]
        ];
        // masukkan data ke database
        DB::table('barangs')->insert($barangs);
    }
}
