<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('services');

        $services = [
            ['code' => 'SRV-100', 'name' => 'ویزیت عمومی', 'description' => 'معاینه و ویزیت عمومی بیمار', 'price' => 250000, 'duration' => 15, 'is_active' => true],
            ['code' => 'SRV-110', 'name' => 'ویزیت تخصصی قلب', 'description' => 'مشاوره تخصصی قلب و عروق', 'price' => 450000, 'duration' => 20, 'is_active' => true],
            ['code' => 'SRV-120', 'name' => 'سونوگرافی', 'description' => 'سونوگرافی عمومی', 'price' => 380000, 'duration' => 25, 'is_active' => true],
            ['code' => 'SRV-130', 'name' => 'آزمایش خون', 'description' => 'پکیج آزمایش پایه', 'price' => 320000, 'duration' => 10, 'is_active' => true],
            ['code' => 'SRV-140', 'name' => 'مشاوره تغذیه', 'description' => 'برنامه غذایی شخصی‌سازی شده', 'price' => 300000, 'duration' => 30, 'is_active' => true],
            ['code' => 'SRV-150', 'name' => 'فیزیوتراپی', 'description' => 'جلسه فیزیوتراپی ۳۰ دقیقه‌ای', 'price' => 280000, 'duration' => 30, 'is_active' => true],
        ];

        $now = now();
        $services = array_map(function ($srv) use ($now) {
            return array_merge($srv, ['created_at' => $now, 'updated_at' => $now]);
        }, $services);

        DB::table('services')->insert($services);
    }
}
