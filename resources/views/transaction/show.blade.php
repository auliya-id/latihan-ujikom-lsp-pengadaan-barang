@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Transaksi</h2>
    <p><strong>ID:</strong> {{ $transaction->id_transaction }}</p>
    <p><strong>Item:</strong> {{ $transaction->item->nama_item }}</p>
    <p><strong>Quantity:</strong> {{ $transaction->quantity }}</p>
    <p><strong>Price:</strong> Rp {{ number_format($transaction->price) }}</p>
    <p><strong>Amount:</strong> Rp {{ number_format($transaction->amount) }}</p>
    <a href="{{ route('transaction.index') }}" class="btn btn-primary">Kembali</a>
</div>
@endsection

<td></td>
<td></td>