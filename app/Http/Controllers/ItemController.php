<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Transaction;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('item.index', compact('items'));
    }

    public function create()
    {
        return view('item.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_item' => 'required|string|max:255',
            'harga_beli' => 'required|numeric|min:0',
            'harga_jual' => 'required|numeric|min:0',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        $data = $request->all();
    
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $namaFile);
            $data['gambar'] = $namaFile;
        }
    
        Item::create($data);
        return redirect()->route('item.index')->with('success', 'Item berhasil ditambahkan.');
    }    

    public function show($id)
    {
        $item = Item::findOrFail($id);
        return view('item.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('item.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_item' => 'required|string|max:255',
            'harga_beli' => 'required|numeric|min:0',
            'harga_jual' => 'required|numeric|min:0',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        $item = Item::findOrFail($id);
        $data = $request->all();
    
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($item->gambar && file_exists(public_path('uploads/' . $item->gambar))) {
                unlink(public_path('uploads/' . $item->gambar));
            }
    
            // Simpan gambar baru
            $file = $request->file('gambar');
            $namaFile = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $namaFile);
            $data['gambar'] = $namaFile;
        }
    
        $item->update($data);
        return redirect()->route('item.index')->with('success', 'Item berhasil diperbarui.');
    }    

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
    
        // Hapus semua transaksi terkait item ini terlebih dahulu
        Transaction::where('id_item', $id)->delete();
    
        // Hapus gambar jika ada
        if ($item->gambar && file_exists(public_path('uploads/' . $item->gambar))) {
            unlink(public_path('uploads/' . $item->gambar));
        }
    
        // Hapus item dari database
        $item->delete();
    
        return redirect()->route('item.index')->with('success', 'Item, transaksi terkait, dan gambar berhasil dihapus.');
    }    
}
