<?php

namespace App\Http\Controllers;
use App\Models\Pesanans;
use Illuminate\Http\Request;

class PesanansController extends Controller
{
    public function muncul(){
         $a = Pesanans::all();
    return view('pesanan', compact('a'));
    }
}
