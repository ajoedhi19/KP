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
        Schema::create('mitras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nama_Mitra',100);
            $table->string('Jenis_KHS', 10);
            $table->string('Nomor_KHS', 20);
            $table->date('Tanggal_Berakhir_KHS');
            $table->string('Nama_Penanggung_Jawab');
            $table->string('Email_Penanggung_Jawab',50);
            $table->string('No_HP');
            $table->string('Alamat_Penanggung_Jawab');
            $table->string('No_Identitas',16);
            $table->binary('Foto_Identitas');
            $table->integer('Jumlah_Minimal_Naker');
            $table->string('Password',16);
            $table->rememberToken();
            $table->timestamps();
        }); 
    }

    public function default(){
        Schema::table('mitras', function ($table) {
            $table->integer('Jumlah_Minimal_Naker')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mitras');
    }
};
