<?php

use App\Models\pegawai;
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
        Schema::table('rujukans', function (Blueprint $table) {
            $table->foreignId('oleh')->after('status');
            $table->foreignId('faskes_id')->after('oleh');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rujukans', function (Blueprint $table) {
            //
        });
    }
};
