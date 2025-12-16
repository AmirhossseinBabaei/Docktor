<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisitSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('visits');

        $appointments = DB::table('appointments')->get();
        if ($appointments->isEmpty()) {
            $this->command?->warn('VisitSeeder skipped: no appointments found.');
            return;
        }

        $rows = [];
        foreach ($appointments as $appointment) {
            // Only create visits for completed or confirmed appointments
            if (! in_array($appointment->status, ['completed', 'confirmed'])) {
                continue;
            }

            $rows[] = [
                'appointment_id' => $appointment->id,
                'patient_id' => $appointment->patient_id,
                'doctor_id' => $appointment->doctor_id,
                'complaint' => fake('fa_IR')->sentence(),
                'diagnosis' => fake('fa_IR')->optional()->sentence(),
                'prescription' => fake('fa_IR')->optional()->sentence(12),
                'notes' => fake('fa_IR')->optional()->text(80),
                'weight' => fake()->optional()->randomFloat(1, 55, 95),
                'height' => fake()->optional()->randomFloat(1, 150, 190),
                'blood_pressure_systolic' => fake()->optional()->numberBetween(100, 140),
                'blood_pressure_diastolic' => fake()->optional()->numberBetween(60, 95),
                'temperature' => fake()->optional()->randomFloat(1, 36.0, 38.5),
                'next_visit_date' => fake()->optional()->date('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        if ($rows) {
            DB::table('visits')->insert($rows);
        }
    }
}

