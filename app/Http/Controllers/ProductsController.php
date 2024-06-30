<?php

namespace App\Http\Controllers;

use App\Models\Produks_tabel;
use Illuminate\Http\Request;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class ProductsController extends Controller
{
    public function index(){
        $produks_tabel = Produks_tabel::all();
        return view('products.index',compact(['produks_tabel']));
    }

    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        Produks_tabel::create($request->all());
        return redirect('/products');
    }
    public function edit($id){
        $produks_tabel = Produks_tabel::find($id);
        return view('products.edit',compact(['produks_tabel']));
    }
    public function update(Request $request,$id){
        $produks_tabel = Produks_tabel::find($id);
        $produks_tabel->update($request->all());
        return redirect('/products');
    }
    public function destroy($id){
        $produks_tabel = Produks_tabel::find($id);
        $produks_tabel->delete();
        return redirect('/products');
    }

}
