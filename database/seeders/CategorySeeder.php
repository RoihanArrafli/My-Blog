<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'name_categori' => 'Web Development',
            'slug' => 'web-development',
        ]);
        Category::factory()->create([
            'name_categori' => 'UI/UX',
            'slug' => 'ui/ux-design',
        ]);
        Category::factory()->create([
            'name_categori' => 'Cyber Security',
            'slug' => 'cyber-security',
        ]);
        Category::factory()->create([
            'name_categori' => 'Data Science',
            'slug' => 'data-science',
        ]);
        Category::factory()->create([
            'name_categori' => 'Machine Learning',
            'slug' => 'machine-learning',
        ]);
    }
}
