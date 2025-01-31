<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Call RoleSeeder first to create roles
        $this->call([RoleSeeder::class]);

        // Seed user after role exist
        $this->seedUsers();

        //Additional Seeders
        $this->call([AirQualitySeeder::class]);
        $this->call([SensorOverviewSeeder::class]);
        $this->call([NotificationLogSeeder::class]);
        $this->call([SummaryReportSeeder::class]);
        $this->call([PermissionsSeeder::class]);
    }

    private function seedUsers(): void
    {
        // Create Admin user if not exists
        $adminEmail = 'admin@admin.com';
        if(!User::where('email', $adminEmail)->exists()){
            $admin = User::create([
                'name' => 'Admin',
                'email' => $adminEmail,
                'password' => bcrypt('password'),
            ]);
            $admin->assignRole('super_admin');
        }

        // Create user user if not exists
        $userEmail = 'user@user.com';
        if(!User::where('email', $userEmail)->exists()){
            $user = User::create([
                'name' => 'user',
                'email' => $userEmail,
                'password' => bcrypt('password'), 
            ]);
            $user->assignRole('user');
        }
    }
}
