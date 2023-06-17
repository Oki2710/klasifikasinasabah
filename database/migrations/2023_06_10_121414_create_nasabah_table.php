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
        Schema::create('nasabah', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('suku_bunga',['1','2','3','4','5','6','7']);
            $table->enum('jangka_waktu',['1','2','3','4','5']);
            $table->integer('plafond_kredit');
            $table->integer('sisa_hutang');
            $table->integer('bunga');
            $table->integer('angsuran_pokok');
            $table->integer('jumlah_tanggunan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nasabah');
    }
};
