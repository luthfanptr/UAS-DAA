<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SummaryReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('summary_reports')->insert ([
            ['weekly' => 'weeklyreport.pdf', 'monthly' => 'monthlyreport.pdf'],
            ['weekly' => 'weeklyreport.pdf', 'monthly' => 'monthlyreport.pdf'],
        ]);
    }
}
