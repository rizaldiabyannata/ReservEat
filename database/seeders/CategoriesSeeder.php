<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\restaurant_categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'category_name' => 'Italian',
                'description' => 'Italian cuisine is known for its emphasis on fresh vegetables, herbs, and olive oil.',
                'path' => 'restaurantCategory_5.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Chinese',
                'description' => 'Chinese cuisine is known for its variety of cooking techniques and ingredients.',
                'path' => 'restaurantCategory_1.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Japanese',
                'description' => 'Japanese cuisine is known for its emphasis on fresh seafood, rice, and noodle dishes.',
                'path' => 'restaurantCategory_7.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Mexican',
                'description' => 'Mexican cuisine is known for its bold flavors, vibrant colors, and variety of spices.',
                'path' => 'restaurantCategory_6.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Western',
                'description' => 'Western cuisine is known for its rich flavors, heavy sauces, and hearty portions.',
                'path' => 'restaurantCategory_4.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Indian',
                'description' => 'Indian cuisine is known for its rich and diverse use of spices and herbs.',
                'path' => 'restaurantCategory_3.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Indonesian',
                'description' => 'Indonesian is known for its bold flavors, rich olive oil, and paella dishes.',
                'path' => 'restaurantCategory_2.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'arabic',
                'description' => 'Arabic cuisine is known for its spicy and sour flavors, with a focus on fresh herbs and chilies.',
                'path' => 'restaurantCategory_8.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($categories as $category) {
            restaurant_categories::create($category);
        }
    }
}
