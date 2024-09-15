@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Barang</h2>
    <form action="{{ route('coba.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="kode_barang">Kode Barang</label>
            <input type="text" name="kode_barang" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="text" name="stok" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection