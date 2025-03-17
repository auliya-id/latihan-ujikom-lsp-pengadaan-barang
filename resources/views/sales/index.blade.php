@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Sales</h2>
    <a href="{{ route('sales.create') }}" class="btn btn-primary mb-3">Tambah Sales</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Tanggal</th>
                <th>DO Number</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $s)
            <tr>
                <td>{{ $s->id_sales }}</td>
                <td>{{ $s->customer->nama_customer }}</td>
                <td>{{ $s->tgl_sales }}</td>
                <td>{{ $s->do_number }}</td>
                <td>{{ $s->status }}</td>
                <td>
                    <a href="{{ route('sales.show', $s->id_sales) }}" class="btn btn-info btn-sm">Lihat</a>
                    <a href="{{ route('sales.edit', $s->id_sales) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('sales.destroy', $s->id_sales) }}" method="POST" style="display:inline;">
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
