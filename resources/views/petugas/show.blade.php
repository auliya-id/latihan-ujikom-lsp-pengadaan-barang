@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Petugas</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $petugas->name }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $petugas->email }}</p>
            <p class="card-text"><strong>Level:</strong> {{ ucfirst($petugas->level) }}</p>
            <a href="{{ route('petugas.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
