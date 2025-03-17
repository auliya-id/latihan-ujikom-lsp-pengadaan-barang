@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Transaksi</h2>
    <form action="{{ route('transaction.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Item</label>
            <select name="id_item" class="form-control">
                @foreach ($items as $item)
                    <option value="{{ $item->id_item }}">{{ $item->nama_item }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Quantity</label>
            <input type="number" name="quantity" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Price</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('transaction.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
