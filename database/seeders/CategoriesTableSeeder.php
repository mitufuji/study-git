<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_names = [
            'ニュース','芸能','スポーツ','政治',
        ];

        foreach ($category_names as $category_name){
            Category::create([
                'name' => $category_name,
            ]);
        }

    }
}
