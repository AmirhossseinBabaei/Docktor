<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Seed core users with roles.
     */
    public function run(): void
    {
        $doctorIds = DB::table('doctors')->pluck('id')->toArray();
        $primaryDoctorId = $doctorIds[0] ?? null;

        $users = [
            [
                'first_name' => 'مدیر',
                'last_name' => 'کل',
                'username' => 'admin',
                'email' => 'admin@example.com',
                'role' => 'admin',
            ],
            [
                'first_name' => 'دکتر',
                'last_name' => 'صالحی',
                'username' => 'dr.salehi',
                'email' => 'doctor@example.com',
                'role' => 'doctor',
                'doctor_id' => $primaryDoctorId,
            ],
            [
                'first_name' => 'پذیرش',
                'last_name' => 'شماره۱',
                'username' => 'reception1',
                'email' => 'reception@example.com',
                'role' => 'reception',
                'doctor_id' => $primaryDoctorId,
            ],
            [
                'first_name' => 'حسابدار',
                'last_name' => 'مرکزی',
                'username' => 'accountant',
                'email' => 'accountant@example.com',
                'role' => 'accountant',
            ],
            [
                'first_name' => 'داروساز',
                'last_name' => 'شیفت',
                'username' => 'pharmacist',
                'email' => 'pharmacist@example.com',
                'role' => 'pharmacist',
            ],
        ];

        $doctorId = null;

        foreach ($users as $userData) {
            $user = User::updateOrCreate(
                ['email' => $userData['email']],
                [
                    'first_name' => $userData['first_name'],
                    'last_name' => $userData['last_name'],
                    'username' => $userData['username'],
                    'password' => Hash::make('password'),
                    'role' => $userData['role'],
                    'phone' => $userData['phone'] ?? null,
                    'doctor_id' => $userData['doctor_id'] ?? $primaryDoctorId,
                    'is_active' => true,
                    'email_verified_at' => now(),
                ]
            );

            if ($userData['role'] === 'doctor') {
                $doctorId = $user->id;
            }
        }

        // پیوند دادن پذیرش به دکتر نمونه (در صورت وجود)
        if ($doctorId) {
            User::where('role', 'reception')->update(['doctor_id' => $doctorId]);
        }

        // نمونه‌های تصادفی بیشتر
        User::factory()->count(25)->create();
    }
}

