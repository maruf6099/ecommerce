<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'=>'Admin user',
                'username'=>'admin',
                'email'=>'ad@gmail.com',
                'role'=>'admin',
                'status'=>'active',
                'password'=>bcrypt('password')
            ],
            [
                'name'=>'Vendor user',
                'username'=>'admin',
                'email'=>'vd@gmail.com',
                'role'=>'vendor',
                'status'=>'active',
                'password'=>bcrypt('password')
            ],
            [
                'name'=>'User',
                'username'=>'user',
                'email'=>'u@gmail.com',
                'role'=>'user',
                'status'=>'active',
                'password'=>bcrypt('password')
            ]
            ]);
    }
}
