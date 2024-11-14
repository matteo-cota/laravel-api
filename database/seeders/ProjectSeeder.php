<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'name' => 'Progetto 1',
            'description' => 'Descrizione del progetto 1'
        ]);
        Project::create([
            'name' => 'Progetto 2',
            'description' => 'Descrizione del progetto 2'
        ]);
    }
}