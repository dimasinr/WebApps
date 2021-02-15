<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = collect([
            'Action',
            'Drama',
            'Romance',
            'Horror',
            'Comedy',
            'Thriller',
            'Fantasy',
        ]);

        $categories->each(function($category){
            Category::Create([
                'name' => $category,
                'slug' => Str::slug($category)
            ]);
        });
    }
}
