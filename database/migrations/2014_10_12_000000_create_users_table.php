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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_mitra',100);
            $table->string('Jenis_KHS', 10)->nullable();
            $table->string('Nomor_KHS', 20)->nullable();
            $table->date('Tanggal_Berakhir_KHS')->nullable();
            $table->string('Nama_Penanggung_Jawab')->nullable();
            $table->string('email',255)->unique();
            $table->string('No_HP')->nullable();
            $table->string('Alamat_Penanggung_Jawab')->nullable();
            $table->string('No_Identitas',16)->nullable();
            $table->string('Foto_Identitas')->nullable();
            $table->integer('Jumlah_Minimal_Naker')->default(0);
            $table->string('password',255)->default(0);
            $table->integer('Role');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function default(){
        Schema::table('users', function ($table) {
            $table->integer('Jumlah_Minimal_Naker')->default(0)->change();
            $table->integer('Role')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};