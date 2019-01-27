<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Http\Resources\Barang as BarangResource;

class BarangControllerAPI extends Controller
{
    //
    public function BarangMasuk(Request $request){
        $barang = $request->isMethod('put') ? Barang::findOrFail($request->barang_id) : new Barang;
        $barang->id = $request->input('barang_id');
        $barang->stok =  1;

        if($barang->save()) {
            return new BarangResource($barang);
        } 
    }
}
