@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4">Data Barang</h2>
            <div class="d-flex justify-content-between mb-3">
                <a href="{{ route('coba.create') }}" class="btn btn-primary">Tambah Barang</a>
            </div>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cobas as $coba)
                        <tr>
                            <td>{{ $coba->kode_barang }}</td>
                            <td>{{ $coba->nama }}</td>
                            <td>{{ $coba->stok }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('coba.edit', $coba->id) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
                                    <form action="{{ route('coba.destroy', $coba->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus barang ini?')" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection