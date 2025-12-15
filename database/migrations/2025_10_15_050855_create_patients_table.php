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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('national_code', 10)->unique(); // کد ملی
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone')->nullable();
            $table->string('mobile')->unique();
            $table->date('birth_date')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->text('address')->nullable();
            $table->text('medical_history')->nullable(); // سابقه پزشکی
            $table->text('allergies')->nullable(); // حساسیت‌ها
            $table->string('insurance_number')->nullable(); // شماره بیمه
            $table->string('insurance_type')->nullable(); // نوع بیمه
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
