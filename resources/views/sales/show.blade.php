@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Sales</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Customer:</strong> {{ $sales->customer->nama_customer }}</p>
            <p><strong>Tanggal:</strong> {{ $sales->tgl_sales }}</p>
            <p><strong>DO Number:</strong> {{ $sales->do_number }}</p>
            <p><strong>Status:</strong> {{ $sales->status }}</p>

            <a href="{{ route('sales.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
