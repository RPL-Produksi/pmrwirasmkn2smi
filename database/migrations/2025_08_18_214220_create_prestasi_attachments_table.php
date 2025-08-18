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
        Schema::create('prestasi_attachments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prestasi_id')->constrained('prestasis')->cascadeOnDelete();
            $table->string('storage_path');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasi_attachments');
    }
};
