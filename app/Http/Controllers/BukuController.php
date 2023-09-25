<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;


class BukuController extends Controller
{
    //fungsi index
    public function index(){
        $data_buku = Buku::all();
        $no = 0;
        $jumlahData = Buku::all()->count('id');
        $totalHarga = Buku::all()->sum('harga');
        return view('buku', compact('data_buku', 'no', 'jumlahData', 'totalHarga')); 
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $buku = new  Buku;
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect('/buku');
    }

    public function destroy($id){
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku');
    }

    public function edit($id){
        $buku = Buku::find($id);
        return view('edit', compact('buku'));
    }
    
    public function update(Request $request, $id){
        $buku = Buku::find($id);
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect("/buku");
    }
}
