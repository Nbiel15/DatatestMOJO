<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('login_guides', function (Blueprint $table) {
            $table->id(); // Kolom "no"
            $table->string('title'); // Judul
            $table->string('image')->nullable(); // Gambar
            $table->text('description'); // Deskripsi
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('login_guides');
    }
};
