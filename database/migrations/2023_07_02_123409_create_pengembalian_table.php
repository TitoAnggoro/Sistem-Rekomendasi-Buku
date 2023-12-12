<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengembalianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengembalians', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('nomor_induk');
            $table->string('jenis_koleksi');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali_1')->nullable();
            $table->date('tgl_kembali_2')->nullable()   ;
            $table->string('sts_wajib')->nullable();
            $table->string('sts_wajib_kbl')->nullable();
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
        Schema::dropIfExists('pengembalian');
    }
}
