<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CacheSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cache')->truncate();
        DB::table('cache')->insert([
            [
                'key' => 'settings:clinic_name',
                'value' => json_encode(['name' => 'مطب نمونه', 'updated_at' => now()->toDateTimeString()], JSON_UNESCAPED_UNICODE),
                'expiration' => now()->addDays(30)->timestamp,
            ],
            [
                'key' => 'stats:dashboard',
                'value' => json_encode(['todayPatients' => 15, 'todayAppointments' => 8, 'todayRevenue' => 2500000], JSON_UNESCAPED_UNICODE),
                'expiration' => now()->addHours(6)->timestamp,
            ],
        ]);

        DB::table('cache_locks')->truncate();
    }
}
