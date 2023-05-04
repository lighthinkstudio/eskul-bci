<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('kategori')->nullable();
            $table->string('judul', 200)->unique();
            $table->string('slug')->unique();
            $table->text('deskripsi')->nullable();
            $table->date('published_at');
            $table->string('foto')->nullable();
            $table->enum('status', ['publish', 'draft'])->default('draft');
            $table->biginteger('created_by')->unsigned()->nullable();
            $table->biginteger('updated_by')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('kategori')->references('slug')->on('kategori');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berita');
    }
}
