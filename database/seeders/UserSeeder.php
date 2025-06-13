<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Ayu',
                'email' => 'ayu@hrd.com',
                'password' => Hash::make('password'),
                'department_id' => 2
            ],
            [
                'name' => 'Budi',
                'email' => 'budi@it.com',
                'password' => Hash::make('password'),
                'department_id' => 1
            ],
            [
                'name' => 'Citra',
                'email' => 'citra@finance.com',
                'password' => Hash::make('password'),
                'department_id' => 3
            ],
            [
                'name' => 'Doni',
                'email' => 'doni@marketing.com',
                'password' => Hash::make('password'),
                'department_id' => 4
            ],
            [
                'name' => 'Eka',
                'email' => 'eka@ops.com',
                'password' => Hash::make('password'),
                'department_id' => 5
            ],
        ]);
    }
}
