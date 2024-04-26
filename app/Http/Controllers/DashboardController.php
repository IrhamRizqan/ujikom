<?php

namespace App\Http\Controllers;

use App\Models\detailPenjualan;
use App\Models\pelanggan;
use App\Models\penjualan;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
