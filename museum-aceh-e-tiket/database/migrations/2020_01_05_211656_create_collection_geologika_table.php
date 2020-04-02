<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionGeologikaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_geologika', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mineral_utama')->nullable();
            $table->string('mineral_sekunder')->nullable();
            $table->string('senyawa_kimia')->nullable();
            $table->string('jenis')->nullable();
            $table->string('tekstur')->nullable();
            $table->string('struktur')->nullable();
            $table->string('proses_pembentukan')->nullable();
            $table->string('warna')->nullable();
            $table->string('karat')->nullable();
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
        Schema::dropIfExists('collection_geologika');
    }
}
