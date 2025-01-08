<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTouristsTable extends Migration
{
    public function up()
    {
        Schema::create('tourists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->date('dob');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('country');
            $table->text('preferences'); // Stores preferences as a comma-separated string
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tourists');
    }
}
