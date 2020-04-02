<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionEtnografikaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_etnografika', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bahan_material')->nullable();
            $table->string('motif_corak')->nullable();
            $table->string('warna')->nullable();
            $table->string('bahan_pewarna')->nullable();
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
        Schema::dropIfExists('collection_etnografika');
    }
}
