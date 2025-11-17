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
            $table->ulid('id');
            $table->interger('user_id');
            $table->string('nik')->unique();
            $table->string('name');
            $table->string('email')->unique()->nullable(false);
            $table->string('Gender', ['Laki-laki','Perempuan']);
            $table->enum('position_role', ['Staff','Admin','Supervisor','Manager','Intern']);
            $table->enum('division', ['HRD','Finance','IT','Marketing','Operation','GA']);
            $table->date('joining_date');
            $table->string('phone_number', 15)->unique();
            $table->date('birth_date')->unique();
            $table->string('address')->nullable();
            $table->enum('status', ['Active','Inactive','Resigned','On Leave'])->default('Active');
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
