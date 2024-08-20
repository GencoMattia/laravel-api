<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologiesData = [
            ['name' => 'HTML'],
            ['name' => 'CSS'],
            ['name' => 'JavaScript'],
            ['name' => 'PHP'],
            ['name' => 'Laravel'],
            ['name' => 'Vue.js'],
            ['name' => 'React'],
            ['name' => 'Node.js'],
            ['name' => 'MySQL'],
            ['name' => 'PostgreSQL'],
            ['name' => 'Docker'],
            ['name' => 'Kubernetes'],
            ['name' => 'Git'],
            ['name' => 'Webpack'],
            ['name' => 'SASS'],
        ];

        foreach($technologiesData as $technologyData){
            $technology = new Technology();
            $technology->name = $technologyData["name"];
            $technology->save();
        }
    }
}
