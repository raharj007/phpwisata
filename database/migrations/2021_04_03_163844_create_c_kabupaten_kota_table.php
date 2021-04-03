<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCKabupatenKotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_kabupaten_kota', function (Blueprint $table) {
            $table->char('id', 4)->primary();
            $table->char('id_c_provinsi', 2);
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
        Schema::dropIfExists('c_kabupaten_kota');
    }
}
