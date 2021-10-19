<?php

namespace App\Http\Controllers;
use App\Models\Barangs;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function tampil(){
         $p = Barangs::all();
    return view('barang', compact('p'));
    }
}
