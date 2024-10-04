<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\TechStack;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);

        // Project::factory(10)->create();
        // TechStack::factory(10)->create();
        // ProjectImage::factory(10)->create();
    }
}
