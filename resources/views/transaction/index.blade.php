@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Transaksi</h2>
    <a href="{{ route('transaction.create') }}" class="btn btn-primary mb-3">Tambah Transaksi</a>
    <table id="transactionTable" class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Item</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Amount</th>
            <th>Aksi</th>
        </tr>
        @foreach ($transactions as $t)
        <tr>
            <td>{{ $t->id_transaction }}</td>
            <td>{{ $t->item->nama_item }}</td>
            <td>{{ $t->quantity }}</td>
            <td>Rp {{ number_format($t->price) }}</td>
            <td>Rp {{ number_format($t->amount) }}</td>
            <td>
                <a href="{{ route('transaction.show', $t->id_transaction) }}" class="btn btn-info btn-sm">Lihat</a>
                <a href="{{ route('transaction.edit', $t->id_transaction) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('transaction.destroy', $t->id_transaction) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
<script>
    $(document).ready(function() {
        $('#transactionTable').DataTable({
            "pageLength": 10,
            "language": {
                "search": "Cari:",
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "zeroRecords": "Tidak ada data ditemukan",
                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                "infoEmpty": "Tidak ada data tersedia",
                "infoFiltered": "(Disaring dari _MAX_ total data)",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Berikutnya",
                    "previous": "Sebelumnya"
                }
            }
        });
    });
</script>
@endsection
