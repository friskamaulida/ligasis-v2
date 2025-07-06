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
        Schema::table('tentang_sekolahs', function (Blueprint $table) {
            $table->string('foto')->nullable()->after('jabatan');
            $table->string('twitter')->nullable()->after('foto');
            $table->string('facebook')->nullable()->after('twitter');
            $table->string('instagram')->nullable()->after('facebook');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tentang_sekolahs', function (Blueprint $table) {
            //
        });
    }
};
