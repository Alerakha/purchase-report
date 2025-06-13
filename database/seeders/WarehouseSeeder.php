<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run()
{
    DB::table('warehouses')->insert([
        ['item_name' => 'Laptop', 'stock' => 10],
        ['item_name' => 'Pulpen', 'stock' => 100],
    ]);
}

}
