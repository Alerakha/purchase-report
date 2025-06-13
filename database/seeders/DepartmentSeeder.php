<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('departments')->insert([
            ['name' => 'IT Support'],
            ['name' => 'HRD'],
            ['name' => 'Finance'],
            ['name' => 'Marketing'],
            ['name' => 'Operational']
        ]);
    }
}
