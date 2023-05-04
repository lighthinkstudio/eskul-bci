<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonfigurasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konfigurasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50)->nullable();
            $table->string('singkatan', 30)->nullable();
            $table->string('tagline')->nullable();
            $table->text('deskripsi')->nullable();
            $table->year('tahun')->nullable();
            $table->string('url', 50)->nullable();
            $table->string('telepon', 50)->nullable();
            $table->string('fax', 50)->nullable();
            $table->string('email')->nullable();
            $table->text('alamat')->nullable();
            $table->string('favicon')->nullable();
            $table->string('logo')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konfigurasi');
    }
}
