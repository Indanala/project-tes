<?php

namespace App\Http\Controllers;

use App\Models\t_pesanan;
use Illuminate\Http\Request;

class TPesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return "tabel pesanan disini";
        $pesanan= t_pesanan::all();
        return view('pesanan.index', ['pesanans'=>$pesanan]);
    }

    public function create()
    {
        return view('pesanan.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'no_pesanan'=>'required',
            'tanggal' => 'required',
            'nm_supplier' => 'required',
            'nm_produk' => 'required',
            'total' => 'required',
        ]);
        t_pesanan::create($validateData);
        return redirect('/pesanans')->with('pesan', "Data berhasil sisimpan");
    }

    public function show(t_pesanan $t_pesanan)
    {
        return view('pesanan.show', compact('t_pesanan'));
    }

    public function edit(t_pesanan $t_pesanan)
    {
        //
    }

    public function update(Request $request, t_pesanan $t_pesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\t_pesanan  $t_pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(t_pesanan $t_pesanan)
    {
        //
    }
}
