<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuCategories;

class MenuCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'category_name' => 'Appetizers'
            ],
            [
                'category_name' => 'Soups and Salads'
            ],
            [
                'category_name' => 'Entrees'
            ],
            [
                'category_name' => 'Sandwiches'
            ],
            [
                'category_name' => 'Desserts'
            ],
            [
                'category_name' => 'Beverages'
            ],
        ];

        foreach ($categories as $category) {
            MenuCategories::create($category);
        }
    }
}
