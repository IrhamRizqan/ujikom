<?php

namespace App\Http\Controllers;

use App\Models\produk_log;
use App\Http\Requests\Storeproduk_logRequest;
use App\Http\Requests\Updateproduk_logRequest;

class ProdukLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk_log = produk_log::all();
        return view('layouts.log.index',compact('produk_log'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storeproduk_logRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(produk_log $produk_log)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produk_log $produk_log)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateproduk_logRequest $request, produk_log $produk_log)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produk_log $produk_log)
    {
        //
    }
}
