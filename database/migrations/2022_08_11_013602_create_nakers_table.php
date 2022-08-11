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
        Schema::create('nakers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nama');
            $table->date('Tanggal_Lahir');
            $table->string('Tempat_Lahir');
            $table->unsignedInteger('Jenis_Kelamin');
            $table->string('Alamat');
            $table->string('No_KTP');
            $table->binary('Foto_KTP');
            $table->string('No_KK');
            $table->string('No_Kartu_BPJS');
            $table->string('No_NPWP');
            $table->string('No_HP');
            $table->string('No_Telpon_Keluarga');
            $table->string('Nama_Keluarga');
            $table->string('Email');
            $table->unsignedInteger('id_witel');
            // $table->foreign('id_witel')->references('id')->on('witels');
            $table->boolean('status_naker');
            $table->unsignedInteger('id_direktorat');
            // $table->foreign('id_direktorat')->references('id')->on('direktorats');
            $table->unsignedInteger('Level_Pendidikan');
            $table->string('Posisi');
            $table->unsignedInteger('id_mitra');
            // $table->foreign('id_mitra')->references('id')->on('mitras');
            $table->date('Tanggal_Pengajuan');
            $table->string('NIK_Waspag_TA');
            $table->string('Regional');
            $table->unsignedInteger('Status_Kepegawaian');
            $table->date('Tanggal_Mulai_Kontrak');
            $table->date('Tanggal_Akhir_Kontrak');
            $table->binary('Kontrak_Kerja');
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
        Schema::dropIfExists('nakers');
    }
};