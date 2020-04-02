<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionFilologikaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_filologika', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('sub_judul')->nullable();
            $table->string('pengarang')->nullable();
            $table->string('penyalin')->nullable();
            $table->string('tempat_penulisan')->nullable();
            $table->string('tahun_penulisan')->nullable();
            $table->string('tahun_penyalinan')->nullable();
            $table->string('bahasa_dan_aksara')->nullable();
            $table->string('bentuk_teks')->nullable();
            $table->string('jenis_tulisan')->nullable();
            $table->string('bahan_alas_naskah')->nullable();
            $table->string('bahan_sampul')->nullable();
            $table->string('jenis_penjilidan')->nullable();
            $table->string('jumlah_halaman')->nullable();
            $table->string('jumlah_baris_halaman')->nullable();
            $table->string('illustrasi')->nullable();
            $table->string('jenis_tinta')->nullable();
            $table->string('warna_tinta')->nullable();
            $table->string('watermark')->nullable();
            
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
        Schema::dropIfExists('collection_filologika');
    }
}
