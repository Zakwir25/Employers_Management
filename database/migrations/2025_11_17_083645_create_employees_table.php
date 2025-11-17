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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->interger('user_id');
            $table->string('nik');
            $table->string('name');
            $table->string('email');
            $table->string('Gender');
            $table->string('position_role');
            $table->string('division');
            $table->date('joining_date');
            $table->string('phone_number', 15);
            $table->date('birth_date');
            $table->string('address');
            $table->string('status');
            $table->decimal('salary', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
