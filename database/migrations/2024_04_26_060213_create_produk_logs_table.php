<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk_logs', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan');
            $table->dateTime('waktu');
            $table->string('namaProduk');
            $table->decimal('harga', 10,2);
            $table->integer('stok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk_logs');


        /* CREATE TRIGGER UNTUK LOG
        DELIMITER $$
        CREATE TRIGGER trigger_edit_produk AFTER UPDATE ON produk FOR EACH ROW BEGIN
        INSERT INTO produk_log (keterangan, waktu, namaProduk, harga, stok) VALUES ('edit', now (), new.namaProduk, new.harga, new.stok);
        END $$
        DELIMITER;

        DELIMITER $$
        CREATE TRIGGER trigger_hapus_produk AFTER DELETE ON produk FOR EACH ROW BEGIN
        INSERT INTO produk_log (keterangan, waktu, namaProduk, harga, stok) VALUES ('hapus', now (), old. namaProduk, old.harga, old.stok);
        END $$
        DELIMITER;

        DELIMITER $$
        CREATE TRIGGER trigger_perubahan_produk AFTER INSERT ON produk FOR EACH ROW BEGIN
        INSERT INTO produk_log (keterangan, waktu, namaProduk, harga, stok) VALUES ('tambah', now (), new.namaProduk, new.harga, new.stok);
        END $$
        DELIMITER;
        */

    }
};
