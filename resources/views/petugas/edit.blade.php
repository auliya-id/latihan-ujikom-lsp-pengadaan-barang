@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Petugas</h2>

    <form action="{{ route('petugas.update', $petugas->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $petugas->name }}" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $petugas->email }}" required>
        </div>

        <div class="mb-3">
            <label>Password (Opsional)</label>
            <input type="password" name="password" class="form-control">
            <small>Kosongkan jika tidak ingin mengubah password</small>
        </div>

        <div class="mb-3">
            <label>Level</label>
            <select name="level" class="form-control">
                <option value="admin" {{ $petugas->level == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="staff" {{ $petugas->level == 'staff' ? 'selected' : '' }}>Staff</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('petugas.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
