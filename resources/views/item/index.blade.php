@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Item</h2>
    <a href="{{ route('item.create') }}" class="btn btn-primary mb-3">Tambah Item</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Item</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <td>{{ $item->id_item }}</td>
                <td>{{ $item->nama_item }}</td>
                <td>Rp {{ number_format($item->harga_beli, 2) }}</td>
                <td>Rp {{ number_format($item->harga_jual, 2) }}</td>        
                <td>
                    @if ($item->gambar)
                        <img src="{{ asset('uploads/' . $item->gambar) }}" width="50">
                    @else
                        Tidak ada gambar
                    @endif
                </td>
                <td>
                    <a href="{{ route('item.show', $item->id_item) }}" class="btn btn-info btn-sm">Lihat</a>
                    <a href="{{ route('item.edit', $item->id_item) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('item.destroy', $item->id_item) }}" method="POST" style="display:inline;">
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
