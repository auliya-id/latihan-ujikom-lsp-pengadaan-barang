<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;
use App\Models\Customer;

class SalesController extends Controller
{
    public function index()
    {
        $sales = Sales::with('customer')->get();
        return view('sales.index', compact('sales'));
    }

    public function create()
    {
        $customers = Customer::all();
        return view('sales.create', compact('customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_customer' => 'required',
            'tgl_sales' => 'required|date',
            'do_number' => 'required',
            'status' => 'required'
        ]);

        Sales::create($request->all());
        return redirect()->route('sales.index')->with('success', 'Sales berhasil ditambahkan.');
    }

    public function show($id)
    {
        $sales = Sales::with('customer')->findOrFail($id);
        return view('sales.show', compact('sales'));
    }

    public function edit($id)
    {
        $sales = Sales::findOrFail($id);
        $customers = Customer::all();
        return view('sales.edit', compact('sales', 'customers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_customer' => 'required',
            'tgl_sales' => 'required|date',
            'do_number' => 'required',
            'status' => 'required'
        ]);

        $sales = Sales::findOrFail($id);
        $sales->update($request->all());

        return redirect()->route('sales.index')->with('success', 'Sales berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $sales = Sales::findOrFail($id);
        $sales->delete();
        return redirect()->route('sales.index')->with('success', 'Sales berhasil dihapus.');
    }
}
