<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    //fungsi index
    public function index(){
        $data_buku = Buku::all()->sortByDesc('id');
        $no = 0;
        $jumlahData = Buku::all()->count('id');
        $totalHarga = Buku::all()->sum('harga');
        return view('buku', compact('data_buku', 'no', 'jumlahData', 'totalHarga'));
    }
}
