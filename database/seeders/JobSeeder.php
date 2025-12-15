<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class JobSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('jobs');
        DB::table('failed_jobs')->truncate();
        DB::table('job_batches')->truncate();

        DB::table('jobs')->insert([
            'queue' => 'default',
            'payload' => json_encode([
                'uuid' => (string) Str::uuid(),
                'displayName' => 'App\\Jobs\\SendReportJob',
                'job' => 'Illuminate\\Queue\\CallQueuedHandler@call',
                'data' => ['commandName' => 'SendReportJob', 'timeout' => 120],
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
            'attempts' => 0,
            'reserved_at' => null,
            'available_at' => now()->timestamp,
            'created_at' => now()->timestamp,
        ]);

        DB::table('failed_jobs')->insert([
            'uuid' => (string) Str::uuid(),
            'connection' => 'database',
            'queue' => 'default',
            'payload' => '{}',
            'exception' => 'Sample failed job for monitoring dashboards.',
            'failed_at' => now(),
        ]);

        DB::table('job_batches')->insert([
            'id' => (string) Str::uuid(),
            'name' => 'sample-batch',
            'total_jobs' => 5,
            'pending_jobs' => 2,
            'failed_jobs' => 1,
            'failed_job_ids' => json_encode([]),
            'options' => null,
            'cancelled_at' => null,
            'created_at' => now()->timestamp,
            'finished_at' => null,
        ]);
    }
}
