<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMWisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_wisata', function (Blueprint $table) {
            $table->char('id', 8)->primary();
            $table->string('nama', 255);
            $table->text('deskripsi_singkat');
            $table->mediumText('deskripsi_lengkap');
            $table->string('alamat', 255);
            $table->char('id_c_kelurahan_desa', 10);
            $table->char('id_c_kecamatan', 10);
            $table->char('id_c_kabupaten_kota', 10);
            $table->char('id_c_provinsi', 10);
            $table->char('telp', 12);
            $table->decimal('lat', 10, 8);
            $table->decimal('lng', 11, 8);
            $table->char('id_c_jenis_wisata', 3);
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
        Schema::dropIfExists('m_wisata');
    }
}
