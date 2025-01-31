<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure roles exist
        $userRole = Role::firstOrCreate(['name' => 'user', 'guard_name' => 'web']);
        $adminRole = Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web']);

        // Assign roles to specific user based on email
        $userUser = User::where('email', 'user@user.com')->first();
        $adminUser = User::where('email', 'admin@admin.com')->first();

        if($userUser){
            $userUser->assignRole($userRole);
        }
        
        if($adminUser){
            $adminUser->assignRole($adminRole);
        }
    }
}
