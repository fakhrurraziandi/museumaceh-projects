<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategoriPengunjungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_pengunjung', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('tarif_individu');
            
            $table->boolean('enable_rombongan')->default(true);
            $table->integer('tarif_rombongan')->default(0);
            $table->string('prefix_code')->nullable();
            $table->integer('order');
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
        Schema::dropIfExists('kategori_pengunjung');
    }
}
