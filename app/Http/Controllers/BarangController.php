<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(Request $request)
{
    $search = $request->query('search'); // ambil parameter 'search' dari URL

    $barangs = Barang::when($search, function ($query) use ($search) {
        return $query->where('namabarang', 'like', "%$search%");
    })->get();

    return view('barang.index', compact('barangs', 'search'));
}



    public function create()
    {
        return view('barang.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'namabarang' => 'required',
            'kategoribarang' => 'required',
            'jumlahstok' => 'required|numeric',
            'hargabarang' => 'required|numeric',
            'tanggalmasuk' => 'required|date',
        ]);

        Barang::create($validated);

        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan!');
    }
    public function show(Barang $barang)
    {
        return view('barang.show', compact('barang'));
    }

    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'idbarang' => 'required|unique:barangs,idbarang,' . $barang->id,
            'namabarang' => 'required',
            'kategoribarang' => 'required',
            'jumlahstok' => 'required|integer',
            'hargabarang' => 'required|numeric',
            'tanggalmasuk' => 'required|date',
        ]);

        $barang->update($request->all());
        return redirect()->route('barang.index')->with('success', 'Barang diperbarui!');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Barang dihapus!');
    }
}

