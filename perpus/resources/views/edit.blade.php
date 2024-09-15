@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Update Barang</h2>
    <form action="{{ route('coba.update', $coba->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kode_barang">Kode Barang</label>
            <input type="text" name="kode_barang" class="form-control" value="{{ old('kode_barang', $coba->kode_barang) }}" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $coba->nama) }}" required>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="text" name="stok" class="form-control" value="{{ old('stok', $coba->stok) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection