<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:api')->group(function () {
    Route::get('/reports/requests-per-department', [ReportController::class, 'requestsPerDepartment']);
    Route::get('/reports/top-categories', [ReportController::class, 'topCategories']);
});

