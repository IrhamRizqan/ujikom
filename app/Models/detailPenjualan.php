<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class detailPenjualan extends Model
{
    use HasFactory;

    protected $table = 'detailPenjualan';
    protected $primaryKey = 'id';
    protected $guarded = '';

    public function penjualan(){
        return $this->belongsTo(penjualan::class, 'penjualan_id');
    }

    public function pelanggan(){
        return $this->belongsTo(pelanggan::class, 'pelanggan_id');
    }

    public function produk(){
        return $this->belongsTo(produk::class, 'produk_id');
    }
}
