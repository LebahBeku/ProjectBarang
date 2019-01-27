<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $barang = \App\Barang::all();
        return view('index',compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $barang = new \App\Barang;
        $barang->nama = $request->get('nama');
        $barang->merk = $request->get('merk');
        $barang->model = $request->get('model');
        $barang->stok = $request->get('stok');
        $barang->save();

        return redirect('barang')->with('success', 'Data Barang Telah Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $barang=\App\Barang::find($id);
        return view('edit', compact('barang', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $barang = \App\Barang::find($id);
        $barang->nama = $request->get('nama');
        $barang->merk = $request->get('merk');
        $barang->model = $request->get('model');
        $barang->stok = $request->get('stok');
        $barang->save();

        return redirect('barang')->with('success', 'Data Barang Telah Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $barang = \App\Barang::find($id);
        $barang->delete();

        return redirect('barang')->with('success', 'Data Barang Telah Dihapus!');
    }
}
