<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<div class="container">
    <h1>Edit Barang</h1>

    <form action="{{ route('barang.update', $barang) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Barang</label>
            <input type="text" name="namabarang" class="form-control" value="{{ $barang->namabarang }}" required>
        </div>

        <div class="mb-3">
            <label>Kategori</label>
            <input type="text" name="kategoribarang" class="form-control" value="{{ $barang->kategoribarang }}" required>
        </div>

        <div class="mb-3">
            <label>Jumlah Stok</label>
            <input type="number" name="jumlahstok" class="form-control" value="{{ $barang->jumlahstok }}" required>
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" step="0.01" name="hargabarang" class="form-control" value="{{ $barang->hargabarang }}" required>
        </div>

        <div class="mb-3">
            <label>Tanggal Masuk</label>
            <input type="date" name="tanggalmasuk" class="form-control" value="{{ $barang->tanggalmasuk }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
