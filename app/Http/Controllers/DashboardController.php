<?php

namespace App\Http\Controllers;

use App\Models\detailPenjualan;
use App\Models\pelanggan;
use App\Models\penjualan;
use App\Models\produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $penjualan = penjualan::all();
        $pelanggan = pelanggan::all();
        $produk = produk::all();
        $detailPenjualan = detailPenjualan::join('penjualan', 'penjualan.id', '=', 'detailpenjualan.penjualan_id')->first();
        $totalPendapatan = detailPenjualan::sum('subtotal');
        return view('content', compact(['penjualan', 'pelanggan', 'produk', 'detailPenjualan', 'totalPendapatan']));
    }
}
