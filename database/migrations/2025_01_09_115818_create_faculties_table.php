<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('faculties', function (Blueprint $table) {
        $table->id();
        $table->string('first_name');
        $table->string('last_name');
        $table->string('email')->unique();
        $table->string('department');
        $table->decimal('salary', 10, 2);  // Store salary as a decimal
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('faculties');
    }
};
