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
        $myCollection = collect([
            ['name' => 'Programming', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s', 'icon' => 'https://i.ibb.co/R2vmLwy/animal.png'],
            ['name' => 'Code', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s', 'icon' => 'https://i.ibb.co/R2vmLwy/animal.png'],
            ['name' => 'FrontEnd', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s', 'icon' => 'https://i.ibb.co/R2vmLwy/animal.png'],
            ['name' => 'BackEnd', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s', 'icon' => 'https://i.ibb.co/R2vmLwy/animal.png'],
            ['name' => 'UI/UX', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s', 'icon' => 'https://i.ibb.co/R2vmLwy/animal.png'],
            ['name' => 'Data Science', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s', 'icon' => 'https://i.ibb.co/R2vmLwy/animal.png'],
            ['name' => 'Machine Learning', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s', 'icon' => 'https://i.ibb.co/R2vmLwy/animal.png'],
            ['name' => 'Artificial Intelegent', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s', 'icon' => 'https://i.ibb.co/R2vmLwy/animal.png'],
            ['name' => 'Design', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s', 'icon' => 'https://i.ibb.co/R2vmLwy/animal.png'],
            ['name' => 'Frameworks', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s', 'icon' => 'https://i.ibb.co/R2vmLwy/animal.png']
        ])->map(function($row) {
            return (object) $row;
        })->each(function($row) {
            \App\Models\Category::create([
                'name' => $row->name,
                'slug' => \Str::slug($row->name),
                'description' => $row->description,
                'icon' => $row->icon,
            ]);
        });
    }
}
