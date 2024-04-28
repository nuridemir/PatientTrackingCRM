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


        // CustomerId
        // Complaint
        // slug
        // Notes
        // AppointmentDate
        // Amount
        // Status (waiting - cancelled - Complete    default->waiting)
        // Weight
        // Deleted

        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->string('complaint');
            $table->string('slug')->unique();
            $table->text('notes')->nullable();
            $table->date('appointment_date');
            $table->decimal('amount', 20, 2)->nullable();
            $table->enum('status', ['waiting', 'cancelled', 'complete'])->default('waiting');
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
        Schema::dropIfExists('appointments');
    }
};
