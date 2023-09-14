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
        Schema::create('arsip_data', function (Blueprint $table) {
            $table->id();
            $table->string('no_berkas');
            $table->string('nama');
            $table->date('tgl_arsip')->nullable();
            $table->foreignId('berkas_id')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('status_id')->nullable();
            $table->string('file');
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('arsip_data');
    }
};
