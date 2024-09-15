<?php

namespace App\Http\Controllers;

use App\Models\Coba;
use Illuminate\Http\Request;

class PerpusCon extends Controller
{
    public function index()
    {
        $cobas = Coba::orderBy('stok', 'ASC')->get();
        return view('index', compact('cobas'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|unique:cobas',
            'nama' => 'required',
            'stok' => 'required',
        ]);

        Coba::create($request->all());
        return redirect()->route('coba.index')
            ->with('success', 'Barang berhasil ditambahkan');
    }

    public function edit($id)
    {
        $coba = Coba::find($id);
        return view('edit', compact('coba'));
    }

    public function update(Request $request, $id)
    {
        $coba = Coba::find($id);
        $request->validate([
            'kode_barang' => 'required|unique:cobas,kode_barang,' . $coba->id,
            'nama' => 'required',
            'stok' => 'required',
        ]);

        $coba->update($request->all());
        return redirect()->route('coba.index')
            ->with('success', 'Barang berhasil diperbarui');
    }

    public function destroy($id)
    {
        $coba = Coba::find($id);
        $coba->delete();
        return redirect()->route('coba.index')
            ->with('success', 'Barang berhasil dihapus');
    }
}