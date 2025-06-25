<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
public function up(): void
{
Schema::create('data_keluargas', function (Blueprint $table) {
$table->id();
$table->string('title', 255);
$table->string('image')->nullable();
$table->text('description');
$table->timestamps();
});
}

public function down(): void
{
    Schema::dropIfExists('change_password_guides');
}
};