@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Customer</h2>
    <a href="{{ route('customer.create') }}" class="btn btn-primary mb-3">Tambah Customer</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->id_customer }}</td>
                <td>{{ $customer->nama_customer }}</td>
                <td>{{ $customer->alamat }}</td>
                <td>{{ $customer->email }}</td>
                <td>
                    <a href="{{ route('customer.show', $customer->id_customer) }}" class="btn btn-info btn-sm">Lihat</a>
                    <a href="{{ route('customer.edit', $customer->id_customer) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('customer.destroy', $customer->id_customer) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
