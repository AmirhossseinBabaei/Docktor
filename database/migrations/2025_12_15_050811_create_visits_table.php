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
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appointment_id')->constrained()->onDelete('cascade');
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->foreignId('doctor_id')->constrained()->onDelete('cascade');
            $table->text('complaint')->nullable(); // شکایت اصلی
            $table->text('diagnosis')->nullable(); // تشخیص
            $table->text('prescription')->nullable(); // نسخه
            $table->text('notes')->nullable(); // یادداشت‌ها
            $table->decimal('weight', 5, 2)->nullable();
            $table->decimal('height', 5, 2)->nullable();
            $table->integer('blood_pressure_systolic')->nullable(); // فشار سیستولیک
            $table->integer('blood_pressure_diastolic')->nullable(); // فشار دیاستولیک
            $table->decimal('temperature', 4, 1)->nullable(); // دما
            $table->string('next_visit_date')->nullable(); // تاریخ ویزیت بعدی
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
