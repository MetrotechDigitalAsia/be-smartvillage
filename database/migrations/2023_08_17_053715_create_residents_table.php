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
        Schema::connection('resident_mysql')->create('residents_data', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_kk');
            $table->string('no_nik');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir')->nullable();
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('pekerjaan')->nullable();
            $table->string('golongan_darah')->nullable();
            $table->string('status_perkawinan')->nullable();
            $table->date('tanggal_perkawinan')->nullable();
            $table->string('shdk')->nullable();
            $table->string('kewarganegaraan');
            $table->string('ayah')->nullable();
            $table->string('ibu')->nullable();
            $table->string('alamat');
            $table->boolean('status_akta_kelahiran')->nullable();
            $table->string('no_akta_kelahiran')->nullable();
            $table->boolean('status_akta_perkawinan')->nullable();
            $table->string('no_akta_perkawinan')->nullable();
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->string('RT');
            $table->string('RW');
            $table->string('banjar');
            $table->boolean('ketua_RT')->default(0);
            $table->boolean('ketua_RW')->default(0);
            $table->boolean('ketua_banjar')->default(0);
            $table->boolean('penyandang_disabilitas')->default(0);
            $table->string('jenis_disabilitas')->nullable();
            $table->string('status_mutasi')->nullable();
            $table->dateTime('waktu_perubahan_mutasi')->nullable();
            $table->boolean('penerima_bantuan')->default(0);
            $table->boolean('akun_mobile_app')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::connection('resident_mysql')->dropIfExists('residents_data');
    }
};
