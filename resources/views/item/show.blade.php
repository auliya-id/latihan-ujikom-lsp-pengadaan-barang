@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Item</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $item->nama_item }}</h5>
            <p class="card-text"><strong>Harga Beli:</strong> Rp {{ number_format($item->harga_beli, 2) }}</p>
            <p class="card-text"><strong>Harga Jual:</strong> Rp {{ number_format($item->harga_jual, 2) }}</p>
            <p>
                @if ($item->gambar)
                    <img src="{{ asset('uploads/' . $item->gambar) }}" width="50">
                @else
                    Tidak ada gambar
                @endif
            </p>
            <a href="{{ route('item.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
