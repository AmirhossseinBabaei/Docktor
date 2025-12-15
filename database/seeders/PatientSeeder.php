<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PatientSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('patients');

        $patients = [];
        for ($i = 1; $i <= 50; $i++) {
            $first = fake('fa_IR')->firstName();
            $last = fake('fa_IR')->lastName();
            $patients[] = [
                'national_code' => (string) fake()->unique()->numerify('##########'),
                'first_name' => $first,
                'last_name' => $last,
                'phone' => '021' . fake()->numberBetween(11111111, 99999999),
                'mobile' => '09' . fake()->unique()->numberBetween(100000000, 999999999),
                'birth_date' => fake()->optional()->date(),
                'gender' => fake()->randomElement(['male', 'female']),
                'address' => fake('fa_IR')->address(),
                'medical_history' => fake('fa_IR')->text(120),
                'allergies' => fake('fa_IR')->optional()->text(60),
                'insurance_number' => fake()->optional()->numerify('##########'),
                'insurance_type' => fake()->randomElement(['تامین اجتماعی', 'سلامت', 'نیروهای مسلح', 'خصوصی']),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('patients')->insert($patients);
    }
}
