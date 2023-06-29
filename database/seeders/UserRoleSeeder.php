<?php

namespace Database\Seeders;

use App\Models\Roles;
use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainUserRole = [
            ['user_id' => 1 , 'role_id' => Roles::ADMIN_ID],
            ['user_id' => 2 , 'role_id' => Roles::MANAGER_ID],
            ['user_id' => 3 , 'role_id' => Roles::USER_ID],
        ];

        UserRole::insert($mainUserRole);
    }
}
