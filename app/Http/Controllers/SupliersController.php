<?php

namespace App\Http\Controllers;
use App\Models\Supliers;
use Illuminate\Http\Request;

class SupliersController extends Controller
{
    public function datadeh(){
         $d = Supliers::all();
    return view('suplier', compact('d'));
    }
}
