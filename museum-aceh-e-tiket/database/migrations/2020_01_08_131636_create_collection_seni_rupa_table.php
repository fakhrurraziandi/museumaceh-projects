<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionSeniRupaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_seni_rupa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pelukis')->nullable();
            $table->string('tahun_lukisan')->nullable();
            $table->string('lokasi_pembuatan')->nullable();
            $table->string('gaya_lukisan')->nullable();
            $table->string('bahan_alas')->nullable();
            $table->string('bingkai')->nullable();
            $table->string('jenis_tinta')->nullable();
            $table->string('warna_lukisan')->nullable();
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
        Schema::dropIfExists('collection_seni_rupa');
    }
}
