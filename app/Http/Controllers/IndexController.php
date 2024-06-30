<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produks_tabel;

class IndexController extends Controller
{
    public function index(){
        $indices = Produks_tabel::all(); // Pastikan nama variabel konsisten
        return view('dashboard.index', compact('indices')); // Pastikan nama view sesuai dengan yang Anda gunakan
    }
}
