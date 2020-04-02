<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKunjunganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kunjungan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('kategori_pengunjung_id');
            $table->boolean('rombongan')->nullable();
            $table->integer('jumlah');
            $table->string('asal_pengunjung')->nullable();
            $table->integer('total_pembayaran');

            $table->boolean('booking_status')->default(false);

            // hanya di isi jika booking_status == true
            $table->string('kode_booking')->nullable();
            $table->date('tanggal_kedatangan')->nullable();
            $table->string('nama_kontak')->nullable();
            $table->string('nomor_kontak')->nullable();
            $table->string('email')->nullable();
            
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
        Schema::dropIfExists('kunjungan');
    }
}
