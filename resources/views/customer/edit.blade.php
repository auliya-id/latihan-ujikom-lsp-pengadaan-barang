@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Customer</h2>

    <form action="{{ route('customer.update', $customer->id_customer) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Customer</label>
            <input type="text" name="nama_customer" value="{{ $customer->nama_customer }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required>{{ $customer->alamat }}</textarea>
        </div>
        <div class="mb-3">
            <label>Telp</label>
            <input type="number" name="telp" value="{{ $customer->telp }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Fax</label>
            <input type="number" name="fax" value="{{ $customer->fax }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ $customer->email }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
