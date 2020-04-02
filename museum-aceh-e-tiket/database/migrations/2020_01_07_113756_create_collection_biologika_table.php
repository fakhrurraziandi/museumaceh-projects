<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionBiologikaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_biologika', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nama_latin')->nullable();
            $table->string('kingdom')->nullable();
            $table->string('phylum')->nullable();
            $table->string('class')->nullable();
            $table->string('order')->nullable();
            $table->string('sub_order')->nullable();
            $table->string('famili')->nullable();
            $table->string('sub_famili')->nullable();
            $table->string('genus')->nullable();
            $table->string('spesies')->nullable();
            $table->string('sub_species')->nullable();
            $table->string('habitat')->nullable();
            $table->boolean('endemik')->default(0)->nullable();
            $table->string('status')->nullable();
            $table->string('warna')->nullable();
            $table->string('teknik_pengawetan')->nullable();
            $table->string('petugas_preparasi')->nullable();

           
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
        Schema::dropIfExists('collection_biologika');
    }
}
