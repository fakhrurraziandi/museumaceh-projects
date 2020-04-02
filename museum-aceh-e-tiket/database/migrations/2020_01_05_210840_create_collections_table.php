<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama')->nullable();
            $table->string('nomor_inventaris')->nullable();
            $table->date('tanggal_inventaris')->nullable();
            $table->date('tanggal_pengadaan')->nullable();
            $table->string('kondisi')->nullable();
            $table->string('ukuran_berat')->nullable();
            $table->string('ukuran_panjang')->nullable();
            $table->string('ukuran_lebar')->nullable();
            $table->string('ukuran_tinggi')->nullable();
            $table->string('cara_perolehan')->nullable();
            $table->string('tempat_perolehan')->nullable();
            $table->string('lokasi_penempatan')->nullable();
            $table->string('keterangan_penempatan')->nullable();
            $table->string('nama_pencatat')->nullable();
            $table->string('asal_usul')->nullable();
            $table->string('kode_aset')->nullable();
            $table->text('deskripsi_singkat')->nullable();
            $table->morphs('collectionable');
            $table->boolean('saved')->default(0);
            $table->boolean('published')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collections');
    }
}
