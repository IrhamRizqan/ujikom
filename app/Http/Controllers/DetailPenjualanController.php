<?php

namespace App\Http\Controllers;

use App\Models\detailPenjualan;
use App\Http\Requests\StoredetailPenjualanRequest;
use App\Http\Requests\UpdatedetailPenjualanRequest;
use App\Models\pelanggan;
use App\Models\penjualan;
use App\Models\produk;
use Illuminate\Http\Request;

class DetailPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = pelanggan::all();
        $penjualan = penjualan::join('pelanggan','pelanggan.id','=','penjualan.pelanggan_id')->get();
        // dd($penjualan)
        return view('layouts.pesanan.index', compact(['penjualan', 'pelanggan']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $detailPenjualan = detailPenjualan::join('penjualan', 'penjualan.id', '=', 'detailpenjualan.penjualan_id')
        ->join('produk', 'produk.id', '=', 'detailpenjualan.produk_id')
        ->where('penjualan.id', $id)
        ->get();
        $produk = produk::all();
        return view('layouts.pesanan.create', compact(['produk', 'id', 'detailPenjualan']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id, $penjualan_id)
    {
        $message = [

        ];

        $request->validate([
            'jumlahProduk' => 'required',
        ],
        [
            'jumlahProduk.required' => ':attribute harus diisi dulu',
        ]);

        $produk = produk::where('id', $id)->first();
        $detailPenjualan = new detailPenjualan();
        $detailPenjualan->penjualan_id = $penjualan_id;
        $detailPenjualan->produk_id = $id;
        $detailPenjualan->jumlahProduk = $request->jumlahProduk;
        $detailPenjualan->subtotal = $request->jumlahProduk * $produk->harga;
        $detailPenjualan->save();
        return redirect('/pesanan/create/'.$penjualan_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(detailPenjualan $detailPenjualan)
    {
        //
    }

    public function pembayaran($id){
        $detailPenjualan = detailPenjualan::join('penjualan', 'penjualan.id', '=', 'detailpenjualan.penjualan_id')
        ->join('produk', 'produk.id', '=', 'detailpenjualan.produk_id')
        ->where('detailPenjualan.id', $id)
        ->get();
        dd($detailPenjualan);
        $produk = produk::all();
        return view('layouts.pesanan.bayar', compact(['produk', 'id', 'detailPenjualan']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(detailPenjualan $detailPenjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, detailPenjualan $detailPenjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(detailPenjualan $detailPenjualan, $id, $penjualan_id)
    {
        $detailPenjualan = detailPenjualan::find($id);
        $detailPenjualan->delete();
        return redirect('/pesanan/proses/'.$penjualan_id);
    }
}
