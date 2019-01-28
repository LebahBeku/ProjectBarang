<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangControllerAPI extends Controller
{
    //
    public function BarangMasuk(Request $request, $id){
        $stok =  $request->stok;

        $barang = \App\Barang::find($id);
        $barang->stok =  $barang->stok + $stok;
        $barang->save();

        $nama = $barang->nama;
        return "Stok Barang $nama ditambah $stok";
    }

    public function BarangKeluar(Request $request, $id){
        $stok =  $request->stok;

        $barang = \App\Barang::find($id);
        $barang->stok =  $barang->stok - $stok;
        $barang->save();

        $nama = $barang->nama;
        return "Stok Barang $nama dikurang $stok";
    }
}
