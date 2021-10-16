<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                $biodatas = [
['name'=>'Adya','bornDate'=>'2004-03-13','gender'=>'P','address'=>'Kp.Cibedug Girang','religion'=>'Islam','age'=>17,'hobby'=>'Memasak'],
['name'=>'Amel','bornDate'=>'2003-08-01','gender'=>'P','address'=>'Kp.Cibedug Girang','religion'=>'Kristen','age'=>18,'hobby'=>'Berenang'],
['name'=>'Iki','bornDate'=>'2002-09-19','gender'=>'L','address'=>'Kp.Cibedug Hilir','religion'=>'Islam','age'=>19,'hobby'=>'Main bola'],
['name'=>'Anisa','bornDate'=>'2001-10-20','gender'=>'P','address'=>'Kp.Cibogo','religion'=>'Kristen','age'=>20,'hobby'=>'Membaca'],
['name'=>'Eza','bornDate'=>'2000-11-18','gender'=>'L','address'=>'Kp.Ciguriang','religion'=>'Islam','age'=>21,'hobby'=>'Main game']
        ];
        // masukkan data ke database
        DB::table('biodatas')->insert($biodatas);
    }
}
