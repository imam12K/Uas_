<?php

namespace App\Http\Controllers;

use App\Models\Jenisbunga;
use Illuminate\Http\Request;

class JenisbungaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Jenisbunga::all();
        return view('jenisbunga.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenisbunga.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Jenisbunga::create(
            [
                'jenisbunga_nama' => $request->jenisbunga_nama
            ]
        );

        return redirect('jenisbunga')->with('success','Data berhasil ditambahkan');
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
        $row = Jenisbunga::findOrFail($id);
        return view('jenisbunga.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Jenisbunga::findOrFail($id);
        $row->update(
            [
                'jenisbunga_nama' => $request->jenisbunga_nama
            ]
        );
        return redirect('jenisbunga')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Jenisbunga::findOrFail($id);
        $row->delete();

        return redirect('jenisbunga')->with('success', 'Data berhasil dihapus');
    }
}