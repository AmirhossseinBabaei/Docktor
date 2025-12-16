<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AppointmentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('appointments');

        $doctorIds = DB::table('doctors')->pluck('id')->toArray();
        $patientIds = DB::table('patients')->pluck('id')->toArray();

        if (empty($doctorIds) || empty($patientIds)) {
            $this->command?->warn('AppointmentSeeder skipped: doctors or patients missing.');
            return;
        }

        $rows = [];
        $statuses = ['pending', 'confirmed', 'completed', 'cancelled', 'no_show'];
        $now = now();

        for ($i = 0; $i < 80; $i++) {
            $doctorId = $doctorIds[array_rand($doctorIds)];
            $patientId = $patientIds[array_rand($patientIds)];

            $date = now()->subDays(rand(0, 20))->addDays(rand(0, 10))->format('Y-m-d');
            $start = fake()->time('H:i');
            $end = date('H:i', strtotime($start . ' +30 minutes'));

            $rows[] = [
                'patient_id' => $patientId,
                'doctor_id' => $doctorId,
                'date' => $date,
                'start_time' => $start,
                'end_time' => $end,
                'status' => $statuses[array_rand($statuses)],
                'description' => fake('fa_IR')->optional()->text(80),
                'cancellation_reason' => null,
                'tracking_code' => strtoupper(Str::random(10)),
                'is_emergency' => fake()->boolean(10),
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        DB::table('appointments')->insert($rows);
    }
}

