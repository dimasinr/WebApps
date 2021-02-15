<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = collect([
            'Horor',
            'Romance',
            'Drama',
            'Tale Story',
            'Urban Legend',
            'Dream',
            'Magic',
        ]);

        $tags->each(function($tag){
            Tag::Create([
                'name' => $tag,
                'slug' => Str::slug($tag),
            ]);
        });
    }
}
