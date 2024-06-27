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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('NIP', 18);
            $table->string('foto', 100);
            $table->string('nama_lengkap', 100);
            $table->enum('jenis_kelamin', ['Laki-Laki','Perempuan']);
            $table->string('tempat_lahir', 50);
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->enum('jabatan', ['Kepala Sekolah','Guru', 'Staff Kariawan']);
            $table->string('bidang_keahlian', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
