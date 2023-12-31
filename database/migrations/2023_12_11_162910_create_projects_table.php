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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('nama_proyek');
            $table->date('deadline');
            $table->text('deskripsi');
            $table->integer('harga');
            $table->enum('status', ['Disiapkan', 'Dikerjakan', 'Ditinjau', 'Dikemas', 'Dikirim', 'Selesai'])->default('Disiapkan');
            $table->foreignId('user_id')->nullable(true)->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('image_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
