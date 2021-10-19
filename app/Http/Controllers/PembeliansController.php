<?php

namespace App\Http\Controllers;
use App\Models\Pembelians;
use Illuminate\Http\Request;

class PembeliansController extends Controller
{
    public function munculkan(){
         $b = Pembelians::all();
    return view('pembelian', compact('b'));
    }
}
