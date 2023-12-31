<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Manager',
            'role_id'=>1,
            'email'=>'manager@company.uz',
            'password'=>Hash::make('admin123'),

        ]);

        User::create([
            'name'=>'Client',
            'role_id'=>2,
            'email'=>'client@company.uz',
            'password'=>Hash::make('admin123'),

        ]);
    }
}
