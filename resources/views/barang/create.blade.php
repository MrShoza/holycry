<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<form action="{{ route('barang.store') }}" method="POST">
    @csrf
    <div>
        <label>Nama Barang</label>
        <input type="text" name="namabarang">
    </div>
    <div>
        <label>Kategori</label>
        <input type="text" name="kategoribarang">
    </div>
    <div>
        <label>Stok</label>
        <input type="number" name="jumlahstok">
    </div>
    <div>
        <label>Harga</label>
        <input type="number" name="hargabarang" step="0.01">
    </div>
    <div>
        <label>Tanggal Masuk</label>
        <input type="date" name="tanggalmasuk">
    </div>
    <button type="submit">Simpan</button>
</form>
