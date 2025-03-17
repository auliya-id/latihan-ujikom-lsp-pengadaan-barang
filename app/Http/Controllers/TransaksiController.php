<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Item;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('item')->get();
        return view('transaction.index', compact('transactions'));
    }

    public function create()
    {
        $items = Item::all();
        return view('transaction.create', compact('items'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_item' => 'required',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        $amount = $request->quantity * $request->price;

        Transaction::create([
            'id_item' => $request->id_item,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'amount' => $amount,
        ]);

        return redirect()->route('transaction.index')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    public function show($id)
    {
        $transaction = Transaction::with('item')->findOrFail($id);
        return view('transaction.show', compact('transaction'));
    }

    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
        $items = Item::all();
        return view('transaction.edit', compact('transaction', 'items'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_item' => 'required',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        $amount = $request->quantity * $request->price;
        $transaction = Transaction::findOrFail($id);
        $transaction->update([
            'id_item' => $request->id_item,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'amount' => $amount,
        ]);

        return redirect()->route('transaction.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Transaction::findOrFail($id)->delete();
        return redirect()->route('transaction.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
