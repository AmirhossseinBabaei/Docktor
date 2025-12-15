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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('medical_system_number')->unique(); // شماره نظام پزشکی
            $table->string('first_name');
            $table->string('last_name');
            $table->string('specialty'); // تخصص
            $table->string('phone')->nullable();
            $table->string('mobile')->unique();
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->time('work_start_time');
            $table->time('work_end_time');
            $table->integer('visit_duration')->default(15); // مدت زمان هر ویزیت (دقیقه)
            $table->json('work_days')->nullable(); // روزهای کاری [0,1,2,3,4,5,6]
            $table->decimal('visit_fee', 10, 2)->default(0); // هزینه ویزیت
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
