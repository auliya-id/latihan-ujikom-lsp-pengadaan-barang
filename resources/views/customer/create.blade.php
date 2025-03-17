@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Customer</h2>

    <form action="{{ route('customer.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Customer</label>
            <input type="text" name="nama_customer" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Telp</label>
            <input type="number" name="telp" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Fax</label>
            <input type="number" name="fax" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
