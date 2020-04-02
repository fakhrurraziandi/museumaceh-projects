<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionKeramonologikaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_keramonologika', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bahan_material')->nullable();
            $table->string('motif_corak_ukiran')->nullable();
            $table->string('warna')->nullable();
            $table->string('teknik_pembuatan')->nullable();
            $table->string('tahun_pembuatan')->nullable();
            $table->string('tempat_pembuatan')->nullable();
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
        Schema::dropIfExists('collection_keramonologika');
    }
}
