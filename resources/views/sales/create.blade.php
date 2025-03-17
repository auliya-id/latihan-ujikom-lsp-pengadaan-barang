@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Sales</h2>

    <form action="{{ route('sales.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Customer</label>
            <select name="id_customer" class="form-control" required>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id_customer }}">{{ $customer->nama_customer }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Tanggal Sales</label>
            <input type="date" name="tgl_sales" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>DO Number</label>
            <input type="text" name="do_number" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <input type="text" name="status" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
