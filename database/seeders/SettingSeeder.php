<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('settings');

        $settings = [
            ['key' => 'clinic.name', 'value' => 'مطب نمونه', 'group' => 'general', 'type' => 'text', 'description' => 'نام کلینیک'],
            ['key' => 'clinic.phone', 'value' => '021-12345678', 'group' => 'general', 'type' => 'text', 'description' => 'شماره تماس'],
            ['key' => 'clinic.address', 'value' => 'تهران، خیابان مثال، پلاک ۱۲۳', 'group' => 'general', 'type' => 'text', 'description' => 'آدرس'],
            ['key' => 'notifications.sms', 'value' => 'true', 'group' => 'notifications', 'type' => 'boolean', 'description' => 'ارسال پیامک فعال'],
            ['key' => 'notifications.email', 'value' => 'true', 'group' => 'notifications', 'type' => 'boolean', 'description' => 'ایمیل فعال'],
            ['key' => 'billing.tax_percent', 'value' => '9', 'group' => 'billing', 'type' => 'number', 'description' => 'مالیات'],
        ];

        $now = now();
        $settings = array_map(function ($s) use ($now) {
            return array_merge($s, ['created_at' => $now, 'updated_at' => $now]);
        }, $settings);

        DB::table('settings')->insert($settings);
    }
}
