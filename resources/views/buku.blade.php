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
            <td>{{  $buku->id  }}</td>
            <td>{{  $buku->judul  }}</td>
            <td>{{  $buku->penulis  }}</td>
            <td>{{  "Rp ".number_format($buku->harga, 2, ',', ',')  }}</td>
            <td>{{  date('d/m/Y'. strtotime($buku->tgl_terbit)) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<h3> <p>Jumlah data = {{ $jumlahData }}</p></h3>
<h3> <p>Total harga = {{ "Rp ".$totalHarga . ",00" }}</p></h3>