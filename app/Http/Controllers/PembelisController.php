<?php

namespace App\Http\Controllers;
use App\Models\Pembelis;
use Illuminate\Http\Request;

class PembelisController extends Controller
{
    public function tampilkan(){
         $c = Pembelis::all();
    return view('pembeli', compact('c'));
    }
}
