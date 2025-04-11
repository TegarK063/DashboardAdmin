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
        Schema::create('job_vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('pekerjaan');
            $table->string('perusahaan');
            $table->string('gaji');
            $table->integer('jumlah_pelamar');
            $table->string('tipe_pekerjaan');
            $table->text('jenis_pekerjaan'); // Ganti dari string
            $table->text('deskripsi');
            $table->text('manfaat');
            $table->text('kualifikasi');
            $table->text('skill_dimiliki');  // Ganti dari string
            $table->string('lokasi');
            $table->timestamps(); // Tambah timestamp
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_vacancies');
    }
};
