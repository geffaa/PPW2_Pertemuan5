@extends('layouts.main')

@section('content')
    <div class="container">
        <h4>Edit Buku</h4>
        <form method="post" action="{{ route('buku.update', $buku->id) }}">
            @csrf
            <div>Judul <input type="text" name="judul" value="{{ $buku->judul }}"></div>
            <div>Penulis <input type="text" name="penulis" value="{{ $buku->penulis }}"></div>
            <div>Harga <input type="number" name="harga" value="{{ $buku->harga }}"></div>
            <div>Tgl. Terbit <input type="date" name="tgl_terbit" value="{{ $buku->tgl_terbit }}"></div>
            {{-- <div>Judul <input type="text" name="judul"></div>
            <div>Penulis <input type="text" name="penulis"></div>
            <div>Harga <input type="number" name="harga"></div>
            <div>Tgl. Terbit <input type="date" name="tgl_terbit"></div> --}}
            <div><button type="submit">Simpan</button></div>
            <a href="/buku">Batal</a>
        </form> 
    </div>
@endsection


