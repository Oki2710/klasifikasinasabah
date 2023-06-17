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
        Schema::table('nasabah', function (Blueprint $table) {
            $table->enum('kolektibilitas', ['Macet', 'Diragukan', 'Lancar'])->nullable()->after('jaminan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nasabah', function (Blueprint $table) {
            $table->dropColumn('kolektibilitas');
        });
    }
};
