<style>
    /* Gaya untuk tabel */
    table {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
        background-color: deepskyblue;
    }

    th, td {
        border: 1px solid #333;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: black; 
        color: white;
    }

    tr:nth-child(even) {
        background-color: whitesmoke;
    }

    /* Gaya untuk tombol Hapus dan Edit */
    button {
        padding: 5px 17px;
        background-color: grey; 
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    button:hover {
        background-color: grey; 
    }

    /* Gaya untuk link "Tambah Buku" */
    a {
        text-decoration: none;
        background-color: grey; 
        color: white;
        padding: 5px 23px;
        border-radius: 5px;
    }

    a:hover {
        background-color: grey; 
    }

    /* Gaya untuk teks "Jumlah data" dan "Total harga" */
    h3 {
        color: #333;
    }
</style>

<table border="1 px" class="table table-striped">
    <thead>
        <th>id</th>
        <th>Judul Buku</th>
        <th>Penulis</th>
        <th>Harga</th>
        <th>Tgl. Terbit</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        @foreach ($data_buku as $buku)
            <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ "Rp ".number_format($buku->harga, 2, ',', ',') }}</td>
                <td>{{ date('d/m/Y', strtotime($buku->tgl_terbit)) }}</td>
                <td>
                    <form action="{{ route('buku.destroy', $buku->id) }}" method="post">
                        @csrf
                        <button onClick="return confirm('Yakin mau dihapus?')">Hapus</button>
                    </form>
                        <a href="{{ route('buku.edit', $buku->id) }}">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<h3> <p>Jumlah data = {{ $jumlahData }}</p> </h3>
<h3> <p>Total harga = {{ "Rp ".$totalHarga . ",00"}}</p> </h3>

<p align="left"><a href="{{ route('buku.create') }}">Tambah Buku</a></p>



