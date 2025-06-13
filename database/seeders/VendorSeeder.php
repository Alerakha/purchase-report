<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run()
{
    DB::table('vendors')->insert([
        ['name' => 'VendorTech', 'contact_info' => 'vendor@tech.com'],
        ['name' => 'ATK Supplier', 'contact_info' => 'atk@supplier.com'],
    ]);
}

}
