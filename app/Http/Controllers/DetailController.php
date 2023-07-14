<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Detail;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Detail::all();
        return view('detail.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('detail.create',[
            'barang' => Barang::get(),
            'pelanggan' => Pelanggan::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Detail::create(
            [
                'detail_pelanggan_id' => $request->detail_pelanggan_id,
                'detail_barang_id' => $request->detail_barang_id,
                'detail_jumlah' => $request->detail_jumlah
            ]
        );

        return redirect('detail')->with('success','Data berhasil ditambahkan');
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
        $row = Detail::findOrFail($id);
        return view('detail.edit', [
            'barang' => Barang::get(),
            'pelanggan' => Pelanggan::get(),
        ],
        compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Detail::findOrFail($id);
        $row->update(
            [
                'detail_pelanggan_id' => $request->detail_pelanggan_id,
                'detail_barang_id' => $request->detail_barang_id,
                'detail_jumlah' => $request->detail_jumlah
            ]
        );
        return redirect('detail')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Detail::findOrFail($id);
        $row->delete();

        return redirect('detail')->with('success', 'Data berhasil dihapus');
    }
}