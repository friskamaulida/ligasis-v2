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
        Schema::create('tentang_sekolahs', function (Blueprint $table) {
           $table->id();
            $table->string('nama_kepala_sekolah');
            $table->string('gelar')->nullable();
            $table->string('jabatan')->default('Kepala Sekolah');
            $table->text('sambutan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tentang_sekolahs');
    }
};
