<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor_induk');
            $table->integer('subjects_id');
            $table->string('judul_buku');
            $table->string('pengarang_1');
            $table->string('pengarang_2')->nullable();;
            $table->string('pengarang_3')->nullable();;
            $table->text('sinopsis');
            // $table->string('subyek_1');
            // $table->string('subyek_2');
            $table->string('bahasa')->nullable();;
            $table->string('isbn')->nullable();;
            $table->integer('jumlah')->nullable();
            $table->string('penerbit')->nullable();;
            $table->string('jenis_koleksi')->nullable();;
            $table->string('status')->nullable();;
            $table->string('status_koleksi')->nullable();;
            $table->softDeletes();
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
        Schema::dropIfExists('books');
    }
}
