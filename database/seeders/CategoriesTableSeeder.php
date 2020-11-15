<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = collect([
            'Framework',
            'Code',
            'Programming',
            'Design',
            'Data',
            'Analytic'
        ]);
        $descriptions = collect([
            'Lorem lorem',
            'Lorem lorem',
            'Lorem lorem',
            'Lorem lorem',
            'Lorem lorem',
            'Lorem lorem'
        ]);
        $icons = collect([
            'link.jpg',
            'link.jpg',
            'link.jpg',
            'link.jpg',
            'link.jpg',
            'link.jpg'
        ]);
        $categories->each(function ($c) {
            \App\Models\Category::create([
                'name' => $cate,
                'slug' => \Str::slug($cate),
                'description' => $descrip,
                'icon' => $ic,
            ]);
        });
    }
}
