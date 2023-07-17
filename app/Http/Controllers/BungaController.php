<?php

namespace App\Http\Controllers;

use App\Models\Jenisbunga;
use App\Models\Bunga;
use Illuminate\Http\Request;

class BungaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Bunga::all();
        return view('bunga.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bunga.create',[
            'jenisbunga' => Jenisbunga::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Bunga::create(
            [
                'bunga_id_jenisbunga' => $request->bunga_id_jenisbunga,
                'bunga_nama' => $request->bunga_nama,
                'bunga_harga' => $request->bunga_harga,
                'bunga_stock' => $request->bunga_stock
            ]
        );

        return redirect('bunga')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Bunga::findOrFail($id);
        return view('bunga.edit', [
            'jenisbunga' => Jenisbunga::get()
        ],
        compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = bunga::findOrFail($id);
        $row->update(
            [
                'bunga_id_jenisbunga' => $request->bunga_id_jenisbunga,
                'bunga_nama' => $request->bunga_nama,
                'bunga_harga' => $request->bunga_harga,
                'bunga_stock' => $request->bunga_stock
            ]
        );
        return redirect('bunga')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Bunga::findOrFail($id);
        $row->delete();

        return redirect('bunga')->with('success', 'Data berhasil dihapus');
    }
}