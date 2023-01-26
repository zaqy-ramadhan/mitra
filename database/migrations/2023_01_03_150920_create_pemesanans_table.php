<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->string('JUDUL');
            $table->string('ASAL_INSTANSI');
            $table->text('DESKRIPSI');
            $table->string('JENIS_KONTEN');
            $table->string('LINK_POSTER')->nullable();
            $table->string('STATUS')->default('dalam antrian');
            $table->foreignId('id_user')->onUpdate('cascade')->onDelete('cascade');
            $table->date('TGL_UPLOAD');
            $table->string('MEDIA');
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
        Schema::dropIfExists('pemesanans');
    }
};
