<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SupliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supliers =[
['namasuplier'=>'Eka','nama'=>'adya','alamat'=>'cibedug','kodepos'=>1234,'kota'=>'bandung'],
['namasuplier'=>'Eki','nama'=>'amel','alamat'=>'cibedug girang','kodepos'=>1225,'kota'=>'bandung'],
['namasuplier'=>'ipi','nama'=>'tiya','alamat'=>'cibodas','kodepos'=>1987,'kota'=>'jakarta'],
['namasuplier'=>'ima','nama'=>'ipeh','alamat'=>'cibogo','kodepos'=>1255,'kota'=>'bandung'],
['namasuplier'=>'rara','nama'=>'api','alamat'=>'cibedug','kodepos'=>1097,'kota'=>'bandung'],
        ];
        DB::table('supliers')->insert($supliers);
    }
}
