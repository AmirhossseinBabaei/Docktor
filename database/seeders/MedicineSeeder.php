<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicineSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('medicines');

        $items = [
            ['code' => 'MED-001', 'brand_name' => 'استامینوفن 500', 'generic_name' => 'Acetaminophen', 'form' => 'قرص', 'dosage' => '500mg', 'description' => 'مسکن و ضد تب', 'stock' => 240, 'price' => 35000, 'requires_prescription' => false],
            ['code' => 'MED-002', 'brand_name' => 'آموکسی سیلین', 'generic_name' => 'Amoxicillin', 'form' => 'کپسول', 'dosage' => '500mg', 'description' => 'آنتی‌بیوتیک', 'stock' => 120, 'price' => 52000, 'requires_prescription' => true],
            ['code' => 'MED-003', 'brand_name' => 'سیتریزین', 'generic_name' => 'Cetirizine', 'form' => 'قرص', 'dosage' => '10mg', 'description' => 'ضد حساسیت', 'stock' => 300, 'price' => 28000, 'requires_prescription' => false],
            ['code' => 'MED-004', 'brand_name' => 'اترادیول', 'generic_name' => 'Estradiol', 'form' => 'پماد', 'dosage' => '1%', 'description' => 'موضعی', 'stock' => 40, 'price' => 75000, 'requires_prescription' => true],
            ['code' => 'MED-005', 'brand_name' => 'ایبوپروفن', 'generic_name' => 'Ibuprofen', 'form' => 'قرص', 'dosage' => '400mg', 'description' => 'مسکن ضد التهاب', 'stock' => 180, 'price' => 42000, 'requires_prescription' => false],
        ];

        $now = now();
        $items = array_map(function ($m) use ($now) {
            return array_merge($m, ['created_at' => $now, 'updated_at' => $now]);
        }, $items);

        DB::table('medicines')->insert($items);
    }
}

