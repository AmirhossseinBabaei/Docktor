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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // کد دارو
            $table->string('brand_name'); // نام تجاری
            $table->string('generic_name'); // نام علمی
            $table->string('form')->nullable(); // شکل دارویی
            $table->string('dosage')->nullable(); // دوز
            $table->text('description')->nullable();
            $table->integer('stock')->default(0); // موجودی
            $table->decimal('price', 10, 2);
            $table->boolean('requires_prescription')->default(true); // نیاز به نسخه؟
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
