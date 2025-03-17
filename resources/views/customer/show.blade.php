@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Customer</h2>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $customer->nama_customer }}</h4>
            <p><strong>Alamat:</strong> {{ $customer->alamat }}</p>
            <p><strong>Telepon:</strong> {{ $customer->telp ?? '-' }}</p>
            <p><strong>Fax:</strong> {{ $customer->fax ?? '-' }}</p>
            <p><strong>Email:</strong> {{ $customer->email }}</p>

            <a href="{{ route('customer.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('customer.edit', $customer->id_customer) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('customer.destroy', $customer->id_customer) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
            </form>
        </div>
    </div>
</div>
@endsection