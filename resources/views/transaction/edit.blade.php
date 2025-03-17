@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Transaksi</h2>
    <form action="{{ route('transaction.update', $transaction->id_transaction) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Item</label>
            <select name="id_item" class="form-control">
                @foreach ($items as $item)
                    <option value="{{ $item->id_item }}" {{ $transaction->id_item == $item->id_item ? 'selected' : '' }}>
                        {{ $item->nama_item }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Quantity</label>
            <input type="number" name="quantity" class="form-control" value="{{ $transaction->quantity }}" required>
        </div>

        <div class="mb-3">
            <label>Price</label>
            <input type="number" name="price" class="form-control" value="{{ $transaction->price }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('transaction.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
