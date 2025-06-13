<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

public function run()
{
    DB::table('requests')->insert([
        ['user_id' => 1, 'request_date' => '2025-05-10', 'status' => 'approved'],
        ['user_id' => 2, 'request_date' => '2025-05-12', 'status' => 'approved'],
        ['user_id' => 3, 'request_date' => '2025-05-14', 'status' => 'done'],
    ]);

    DB::table('request_items')->insert([
        ['request_id' => 1, 'item_name' => 'Laptop', 'category' => 'Hardware', 'quantity' => 2],
        ['request_id' => 2, 'item_name' => 'Pulpen', 'category' => 'Alat Tulis Kantor', 'quantity' => 30],
        ['request_id' => 3, 'item_name' => 'SPSS License', 'category' => 'Software', 'quantity' => 1],
    ]);

    DB::table('approvals')->insert([
        ['request_id' => 1, 'approved_by' => 'Manager A', 'is_approved' => true],
        ['request_id' => 2, 'approved_by' => 'Manager B', 'is_approved' => true],
        ['request_id' => 3, 'approved_by' => 'Manager C', 'is_approved' => true],
    ]);
}

}
