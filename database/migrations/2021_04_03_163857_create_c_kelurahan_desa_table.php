<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCKelurahanDesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_kelurahan_desa', function (Blueprint $table) {
            $table->char('id', 10)->primary();
            $table->char('id_c_kecamatan', 6);
            $table->string('nama', 255);
            $table->integer('id_jenis');
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
        Schema::dropIfExists('c_kelurahan_desa');
    }
}
