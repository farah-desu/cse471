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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('u_id'); // Primary key
            $table->string('u_name'); // User name
            $table->string('academic_credentials'); // Academic credentials
            $table->string('email')->unique(); // Email (unique)
            $table->string('password'); // Password
            $table->timestamp('email_verified_at')->nullable(); // Optional email verification timestamp
            $table->rememberToken(); // Token for "remember me" functionality
            $table->timestamps(); // Created_at and Updated_at timestamps
            $table->integer('time_currency')->default(0); // Time currency with a default value of 0
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
