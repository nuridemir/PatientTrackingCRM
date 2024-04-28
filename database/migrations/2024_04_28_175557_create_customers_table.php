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


        // Id
        // Name
        // Surname
        // slug
        // IdentificationNumber
        // Age
        // Birthday
        // PhoneNumber
        // Email
        // Adress
        // Notes
        // Avatar
        // Relative
        // RelativePhone
        // Gender
        // MaritalStatus
        // CustomerWeight
        // Weight
        // Deleted


        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('slug')->unique();
            $table->string('identification_number')->nullable();
            $table->integer('age')->nullable();
            $table->date('birthday')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->text('notes')->nullable();
            $table->string('avatar')->nullable();
            $table->string('relative')->nullable();
            $table->string('relative_phone')->nullable();
            $table->enum('gender', ['male', 'female', 'undetermined'])->default('undetermined');
            $table->enum('marital_status', ['married', 'single', 'undetermined'])->default('undetermined');
            $table->integer('customer_weight')->nullable();
            $table->integer('weight')->nullable();
            $table->boolean('deleted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
