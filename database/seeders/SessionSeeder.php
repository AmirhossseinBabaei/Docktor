<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SessionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('sessions');

        $user = User::first();
        if (! $user) {
            $this->command?->warn('SessionSeeder skipped: no users found.');
            return;
        }

        DB::table('sessions')->insert([
            'id' => Str::uuid()->toString(),
            'user_id' => $user->id,
            'ip_address' => '127.0.0.1',
            'user_agent' => 'Seeder/CLI',
            'payload' => json_encode(['_token' => Str::random(20)], JSON_UNESCAPED_UNICODE),
            'last_activity' => now()->timestamp,
        ]);
    }
}
