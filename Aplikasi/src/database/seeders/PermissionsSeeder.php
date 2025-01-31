<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create permissions for user
        $userPermissions = [
            'view_any_air_quality',
            'view_any_notification_log',
            'view_any_sensor_overview',
            'view_any_summary_report',
        ];

        // create permissions if they don't exist
        foreach ($userPermissions as $permission){
            Permission::firstOrCreate(['name' => $permission]);
        }

        // create or get the 'user' role
        $userRole = Role::firstOrCreate(['name' => 'Staff']);
        // Assign permissions to the 'user' role
        $userRole->givePermissionTo($userPermissions);
    }
}
