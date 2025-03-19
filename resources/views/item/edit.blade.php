@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Item</h2>

    <form action="{{ route('item.update', $item->id_item) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Item</label>
            <input type="text" name="nama_item" class="form-control" value="{{ $item->nama_item }}" required>
        </div>
        <div class="mb-3">
            <label>Harga Beli</label>
            <input type="number" name="harga_beli" class="form-control" value="{{ $item->harga_beli }}" required>
        </div>
        <div class="mb-3">
            <label>Harga Jual</label>
            <input type="number" name="harga_jual" class="form-control" value="{{ $item->harga_jual }}" required>
        </div>
        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control">
            @if($item->gambar)
                <div class="mt-2">
                    <img src="{{ asset('uploads/' . $item->gambar) }}" width="150">
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('item.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
