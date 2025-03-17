@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Item</h2>

    <form action="{{ route('item.update', $item->id_item) }}" method="POST">
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

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('item.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection