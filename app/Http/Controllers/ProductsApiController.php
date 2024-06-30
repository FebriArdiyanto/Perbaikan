<?php

namespace App\Http\Controllers;

use App\Models\Produks_tabel;
use Illuminate\Http\Request;

class ProductsApiController extends Controller
{
    // ini menampilkan semua produk
    public function index(){
        $produks_tabel = Produks_tabel::all();
        return response()->json(['message' => 'succes', 'data' => $produks_tabel]);
    }

    // ini untuk menampilkan salah satu produk aja
    public function show($id){
        $produk_tabel = Produks_tabel::find($id);
        return response()->json(['message'=>'succes','data' => $produk_tabel]);
    }

    //ini untuk menyimpan data produk
    public function store(Request $request ){
        $produk_tabel = Produks_tabel::create($request->all());
        return response()->json(['message' => 'succes', 'data' => $produk_tabel]);
    }

    //ini untuk mengupdate data produk
    public function update(Request $request,$id){
        $produk_tabel = Produks_tabel::find($id);
        $produk_tabel->update($request->all());
        return response()->json(['message' => 'succes', 'data' => $produk_tabel]);
    }

    //ini untuk mengdelete
    public function destroy($id){
        $produk_tabel = Produks_tabel::find($id);
        $produk_tabel->delete();
        return response()->json(['message' => 'succes', 'data' => null]);
    }


}
