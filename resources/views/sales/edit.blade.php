@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Sales</h2>

    <form action="{{ route('sales.update', $sales->id_sales) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Customer</label>
            <select name="id_customer" class="form-control" required>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id_customer }}" 
                        {{ $sales->id_customer == $customer->id_customer ? 'selected' : '' }}>
                        {{ $customer->nama_customer }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Tanggal Sales</label>
            <input type="date" name="tgl_sales" class="form-control" value="{{ $sales->tgl_sales }}" required>
        </div>

        <div class="mb-3">
            <label>DO Number</label>
            <input type="text" name="do_number" class="form-control" value="{{ $sales->do_number }}" required>
        </div>

        <div class="mb-3">
            <label>Status</label>
            <input type="text" name="status" class="form-control" value="{{ $sales->status }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('sales.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
