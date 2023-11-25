<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = collect(
            [
                ['name' => 'Áo thun'],
                ['name' => 'Áo sơ mi'],
                ['name' => 'Quần tây'],
                ['name' => 'Quần jean'],
                ['name' => 'Quần unisex'],
                ['name' => 'Giày thể thao'],
            ]
        );
        $categories->each(function($category)
        {   
            Category::insert($category);
        });
        // Category::create($category);
    }
}
