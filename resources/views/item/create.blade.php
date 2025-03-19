@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Item</h2>

    <form action="{{ route('item.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Nama Item</label>
            <input type="text" name="nama_item" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Harga Beli</label>
            <input type="number" name="harga_beli" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Harga Jual</label>
            <input type="number" name="harga_jual" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
