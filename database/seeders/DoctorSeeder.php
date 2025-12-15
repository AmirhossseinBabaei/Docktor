<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DoctorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('doctors');

        $specialties = ['عمومی', 'قلب', 'مغز و اعصاب', 'ارتوپدی', 'داخلی', 'پوست', 'اطفال'];

        $doctors = [];
        for ($i = 1; $i <= 10; $i++) {
            $first = fake('fa_IR')->firstName();
            $last = fake('fa_IR')->lastName();
            $specialty = $specialties[array_rand($specialties)];

            $doctors[] = [
                'medical_system_number' => 100000 + $i,
                'first_name' => $first,
                'last_name' => $last,
                'specialty' => $specialty,
                'phone' => '021' . fake()->numberBetween(11111111, 99999999),
                'mobile' => '09' . fake()->numberBetween(100000000, 999999999),
                'email' => Str::slug($first . '.' . $last) . "@clinic.test",
                'address' => fake('fa_IR')->address(),
                'work_start_time' => '08:00',
                'work_end_time' => '16:00',
                'visit_duration' => fake()->randomElement([15, 20, 30]),
                'work_days' => json_encode([0,1,2,3,4]),
                'visit_fee' => fake()->numberBetween(250000, 550000),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('doctors')->insert($doctors);
    }
}
