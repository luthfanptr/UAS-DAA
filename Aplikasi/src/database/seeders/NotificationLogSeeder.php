<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notification_logs')->insert([
            ['date' => '2025-01-31','time' => now(), 'warning_level' => 'low', 'cause_alert' => 'none'],
            ['date' => '2025-01-31','time' => now(), 'warning_level' => 'medium', 'cause_alert' => 'none'],
        ]);
    }
}
