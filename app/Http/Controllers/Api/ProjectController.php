<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index(): JsonResponse
    {
        $projects = Project::all();
        return response()->json($projects);
    }
}