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
            $table->string('witel');
            $table->boolean('status_naker');
            $table->string('direktorat');
            $table->unsignedInteger('Level_Pendidikan');
            $table->string('Posisi');
            $table->unsignedInteger('user_id');
            $table->date('Tanggal_Pengajuan');
            $table->string('NIK_Waspag_TA');
            $table->string('Regional')->default('Jatim Bali Nusra');
            $table->unsignedInteger('Status_Kepegawaian');
            $table->date('Tanggal_Mulai_Kontrak');
            $table->date('Tanggal_Akhir_Kontrak');
            $table->binary('Kontrak_Kerja');
            $table->timestamps();


            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
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