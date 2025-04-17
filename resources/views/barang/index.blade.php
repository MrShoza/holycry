@extends('layout.app')
@section('content')

<h1>DATA SEMUA BARANG</h1>

<form method="GET" class="mb-3">
    <input type="text" name="search" value="{{ $search }}" placeholder="cari barang" class="form-control">
</form>

<a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">MENAMBAH</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th><th>NAMA</th><th>KATEGORI</th><th>STOK</th><th>HARGA</th><th>TANGGAL</th><th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        @foreach($barangs as $barang)
        <tr>
            <td>{{ $barang->idbarang }}</td>
            <td>{{ $barang->namabarang }}</td>
            <td>{{ $barang->kategoribarang }}</td>
            <td>{{ $barang->jumlahstok }}</td>
            <td>Rp {{ number_format($barang->hargabarang, 0, ',', '.') }}</td>
            <td>{{ $barang->tanggalmasuk }}</td>
            <td>
                <a href="{{ route('barang.show', $barang) }}" class="btn btn-info btn-sm">Lihat</a>
                <a href="{{ route('barang.edit', $barang) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('barang.destroy', $barang) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus barang?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
