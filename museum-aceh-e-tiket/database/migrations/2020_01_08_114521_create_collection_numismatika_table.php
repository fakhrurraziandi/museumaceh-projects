<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionNumismatikaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_numismatika', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bahan_material')->nullable();
            $table->string('inskripsi')->nullable();
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
        Schema::dropIfExists('collection_numismatika');
    }
}
