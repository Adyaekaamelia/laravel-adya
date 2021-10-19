<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
['namapembeli'=>'adya','nama'=>'adya','jeniskelamin'=>'p','alamat'=>'cibedug','kodepos'=>123,'kota'=>'Cirebon','tgl_lahir'=>'2004-03-13'],
['namapembeli'=>'amel','nama'=>'amel','jeniskelamin'=>'p','alamat'=>'cibedug girang','kodepos'=>133,'kota'=>'Bandung','tgl_lahir'=>'2003-03-13'],
['namapembeli'=>'adit','nama'=>'adit','jeniskelamin'=>'l','alamat'=>'cibogo','kodepos'=>443,'kota'=>'Kopo','tgl_lahir'=>'2006-03-13'],
['namapembeli'=>'iki','nama'=>'iki','jeniskelamin'=>'l','alamat'=>'ciguriang','kodepos'=>523,'kota'=>'Cirebon','tgl_lahir'=>'2007-03-13'],
['namapembeli'=>'api','nama'=>'api','jeniskelamin'=>'p','alamat'=>'cibedug','kodepos'=>166,'kota'=>'Jateng','tgl_lahir'=>'2008-03-13']
        ];
     DB::table('pembelis')->insert($pembelis);
    }
}
