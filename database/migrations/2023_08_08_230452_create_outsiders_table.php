<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('resident_mysql')->create('outsiders', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('kewarganegaraan');
            $table->string('agama');
            $table->string('no_nik');
            $table->string('no_kk');
            $table->string('shdk');
            $table->string('golongan_darah')->nullable();
            $table->string('pendidikan');
            $table->string('pekerjaan')->nullable();
            $table->boolean('status_akta_kelahiran')->default(0);
            $table->string('no_akta_kelahiran')->nullable();
            $table->string('ayah');
            $table->string('pekerjaan_ayah');
            $table->string('umur_ayah');
            $table->string('nik_ayah');
            $table->string('kewarganegaraan_ayah');
            $table->string('alamat_ayah');
            $table->string('ibu');
            $table->string('umur_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('kewarganegaraan_ibu');
            $table->string('nik_ibu');
            $table->string('status_perkawinan')->default('Belum Kawin');
            $table->string('tanggal_perkawinan')->nullable();
            $table->string('status_akta_perkawinan')->nullable();
            $table->string('no_akta_perkawinan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('resident_mysql')->dropIfExists('outsiders');
    }
};
