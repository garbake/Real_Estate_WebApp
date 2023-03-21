<?php

namespace Database\Seeders;

use App\Models\User_Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class User_RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userroles = [
            [
                'RoleName' => 'Admin',
            ],
            [
                'RoleName' => 'Agent',
            ],
            [
                'RoleName' => 'Customer',
            ]
            
        ];

        foreach($userroles as $key => $value){
            User_Role::create($value);
        }
    }
}
