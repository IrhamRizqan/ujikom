<?php

namespace Database\Seeders;

use App\Models\pelanggan;
use App\Models\penjualan;
use App\Models\produk;
use App\Models\detailPenjualan;
use App\Models\User;
use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'roles' => 'Administrator',
            'password' => 'admin123',
        ]);

        User::factory()->create([
            'name' => 'irham',
            'email' => 'irham@gmail.com',
            'roles' => 'Petugas',
            'password' => 'irham123',
        ]);

        User::factory()->create([
            'name' => 'fathan',
            'email' => 'fathan@gmail.com',
            'roles' => 'Petugas',
            'password' => 'fathan123',
        ]);

        pelanggan::factory()->create([
            'namaPelanggan' => 'Irham',
            'alamat' => 'Jl. Leuwipanjang',
            'nomorTelepon' => '08123456789',
        ]);

        pelanggan::factory()->create([
            'namaPelanggan' => 'Fathan',
            'alamat' => 'Jl. Patrol',
            'nomorTelepon' => '08234567891',
        ]);

        pelanggan::factory()->create([
            'namaPelanggan' => 'Taufik Insan',
            'alamat' => 'Jl. Banjaran',
            'nomorTelepon' => '08345678912',
        ]);

        penjualan::factory()->create([
            'pelanggan_id' => '3',
            'tanggalPenjualan' => Carbon::create('2024', '4', '22'),
            'totalHarga' => '15000',
        ]);

        penjualan::factory()->create([
            'pelanggan_id' => '2',
            'tanggalPenjualan' => Carbon::create('2024', '4', '15'),
            'totalHarga' => '3000',
        ]);

        penjualan::factory()->create([
            'pelanggan_id' => '1',
            'tanggalPenjualan' => Carbon::create('2024', '4', '7'),
            'totalHarga' => '230000',
        ]);

        produk::factory()->create([
            'namaProduk' => 'Nasi Kandar',
            'harga' => '15000',
            'stok' => '20',
        ]);

        produk::factory()->create([
            'namaProduk' => 'Es Teh',
            'harga' => '3000',
            'stok' => '30',
        ]);

        produk::factory()->create([
            'namaProduk' => 'Croissant',
            'harga' => '230000',
            'stok' => '50',
        ]);

        detailPenjualan::factory()->create([
            'penjualan_id' => '1',
            'produk_id' => '1',
            'jumlahProduk' => '1',
            'subtotal' => '15000',
        ]);

        detailPenjualan::factory()->create([
            'penjualan_id' => '2',
            'produk_id' => '2',
            'jumlahProduk' => '1',
            'subtotal' => '3000',
        ]);

        detailPenjualan::factory()->create([
            'penjualan_id' => '3',
            'produk_id' => '3',
            'jumlahProduk' => '1',
            'subtotal' => '230000',
        ]);
    }
}
