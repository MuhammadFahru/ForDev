<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = collect(['Desktop','Mobile','PHP','Kotlin','Javascript','Python','MySQL','MongoDB','Photoshop','Figma','Solving','Analysis','Model','Classification','Poster','Logo','Mockup','Laravel','Bootstrap']);
        $tag->each(function ($c) {
            \App\Models\Tag::create([
                'name' => $c,
                'slug' => \Str::slug($c),
            ]);
        });
    }
}
