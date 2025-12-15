<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
//            DoctorSeeder::class,
//            PatientSeeder::class,
//            UserSeeder::class,
//            ServiceSeeder::class,
//            MedicineSeeder::class,
            AppointmentSeeder::class,
//            VisitSeeder::class,
//            MessageSeeder::class,
//            SettingSeeder::class,
//            CacheSeeder::class,
//            JobSeeder::class,
//            SessionSeeder::class,
        ]);
    }
}
