<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function requestsPerDepartment()
    {
        $data = DB::select("
            SELECT
                d.name as department_name,
                DATE_TRUNC('month', r.request_date) AS month,
                COUNT(DISTINCT r.id) as total_requests
            FROM requests r
            JOIN users u ON r.user_id = u.id
            JOIN departments d ON u.department_id = d.id
            GROUP BY d.name, DATE_TRUNC('month', r.request_date)
            ORDER BY month DESC
        ");

        return response()->json($data);
    }

    public function topCategories()
    {
        $data = DB::select("
            WITH ranked_categories AS (
                SELECT
                    d.name AS department_name,
                    DATE_TRUNC('month', r.request_date) AS month,
                    ri.category,
                    COUNT(*) AS total,
                    ROW_NUMBER() OVER (PARTITION BY d.name, DATE_TRUNC('month', r.request_date) ORDER BY COUNT(*) DESC) AS rank
                FROM requests r
                JOIN users u ON r.user_id = u.id
                JOIN departments d ON u.department_id = d.id
                JOIN request_item ri ON r.id = ri.request_id
                GROUP BY d.name, DATE_TRUNC('month', r.request_date), ri.category
            )
            SELECT * FROM ranked_categories WHERE rank = 1
        ");

        return response()->json($data);
    }
}
