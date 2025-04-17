<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<div class="container">
    <h1>DITAIL BARANG </h1>

    <table class="table table-bordered">
        <tr>
            <th>ID BARANG</th>
            <td>{{ $barang->idbarang }}</td>
        </tr>
        <tr>
            <th>NAMA BARANG</th>
            <td>{{ $barang->namabarang }}</td>
        </tr>
        <tr>
            <th>KATEGORY</th>
            <td>{{ $barang->kategoribarang }}</td>
        </tr>
        <tr>
            <th>JUMLAH STOK</th>
            <td>{{ $barang->jumlahstok }}</td>
        </tr>
        <tr>
            <th>HARGA</th>
            <td>Rp {{ number_format($barang->hargabarang, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th>TANGGAL MASUK</th>
            <td>{{ $barang->tanggalmasuk }}</td>
        </tr>
    </table>

    <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
</div>
