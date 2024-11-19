<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Api\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/test', function () {
    return response()->json(['message' => 'API is working']);
});