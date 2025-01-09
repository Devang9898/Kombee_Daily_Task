<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   
    public function up()
{
    Schema::create('employees', function (Blueprint $table) {
        $table->id();
        $table->string('first_name');
        $table->string('middle_name')->nullable();
        $table->string('last_name');
        $table->string('email')->unique();
        $table->enum('gender', ['male', 'female', 'other']);
        $table->enum('blood_group', ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-']);
        $table->string('location');
        $table->json('hobbies'); // multi-checkbox data stored in JSON format
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('employees');
}


    
};
