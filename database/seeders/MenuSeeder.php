<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $menus = [
            [
                'name' => 'Fried Calamari',
                'description' => 'Crispy fried squid rings served with tangy marinara sauce',
                'price' => 150000,
                'stock' => 10,
                'menu_category_id' => 1, // Appetizers
            ],
            [
                'name' => 'Chicken Wings',
                'description' => 'Spicy buffalo wings served with ranch dressing',
                'price' => 120000,
                'stock' => 15,
                'menu_category_id' => 1, // Appetizers
            ],
            [
                'name' => 'Creamy Tomato Soup',
                'description' => 'Fresh tomatoes blended with cream and herbs',
                'price' => 80000,
                'stock' => 20,
                'menu_category_id' => 2, // Soups and Salads
            ],
            [
                'name' => 'Greek Salad',
                'description' => 'Mixed greens, feta cheese, olives, and red onion, topped with a zesty Greek dressing',
                'price' => 140000,
                'stock' => 15,
                'menu_category_id' => 2, // Soups and Salads
            ],
            [
                'name' => 'Caesar Salad',
                'description' => 'Romaine lettuce, croutons, and parmesan cheese, tossed in a classic Caesar dressing',
                'price' => 120000,
                'stock' => 12,
                'menu_category_id' => 2, // Soups and Salads
            ],
            [
                'name' => 'Grilled Steak',
                'description' => 'Tender grilled steak served with roasted vegetables and garlic mashed potatoes',
                'price' => 250000,
                'stock' => 8,
                'menu_category_id' => 3, // Entrees
            ],
            [
                'name' => 'Pan-Seared Salmon',
                'description' => 'Fresh salmon fillet seared to perfection, served with quinoa and steamed broccoli',
                'price' => 220000,
                'stock' => 12,
                'menu_category_id' => 3, // Entrees
            ],
            [
                'name' => 'Vegetarian Pasta',
                'description' => 'Fresh vegetables and herbs tossed with linguine and a light olive oil sauce',
                'price' => 180000,
                'stock' => 15,
                'menu_category_id' => 3, // Entrees
            ],
            [
                'name' => 'Chicken Fajitas',
                'description' => 'Sizzling chicken strips served with sautéed onions and bell peppers, served with warm flour tortillas',
                'price' => 190000,
                'stock' => 10,
                'menu_category_id' => 3, // Entrees
            ],
            [
                'name' => 'Classic Cheeseburger',
                'description' => 'Juicy beef patty, cheddar cheese, lettuce, tomato, and red onion on a toasted brioche bun',
                'price' => 120000,
                'stock' => 12,
                'menu_category_id' => 4, // Sandwiches
            ],
            [
                'name' => 'Grilled Chicken Club',
                'description' => 'Chicken breast, bacon, lettuce, tomato, and mayonnaise on whole wheat bread',
                'price' => 140000,
                'stock' => 10,
                'menu_category_id' => 4, // Sandwiches
            ],
            [
                'name' => 'Crispy Chicken Wrap',
                'description' => 'Crispy fried chicken, lettuce, tomato, and ranch dressing wrapped in a flour tortilla',
                'price' => 130000,
                'stock' => 15,
                'menu_category_id' => 4, // Sandwiches
            ],
            [
                'name' => 'Chocolate Lava Cake',
                'description' => 'Warm chocolate cake filled with a rich chocolate center, served with vanilla ice cream',
                'price' => 60000,
                'stock' => 12,
                'menu_category_id' => 5, // Desserts
            ],
            [
                'name' => 'Fresh Fruit Salad',
                'description' => 'A seasonal selection of fresh fruits, served chilled',
                'price' => 50000,
                'stock' => 15,
                'menu_category_id' => 5, // Desserts
            ],
            [
                'name' => 'Cheesecake',
                'description' => 'Creamy cheesecake on a graham cracker crust, served with a mixed berry compote',
                'price' => 70000,
                'stock' => 10,
                'menu_category_id' => 5, // Desserts
            ],
            [
                'name' => 'Coffee',
                'description' => 'Freshly brewed coffee, served hot or iced',
                'price' => 20000,
                'stock' => 20,
                'menu_category_id' => 6, // Beverages
            ],
            [
                'name' => 'Tea',
                'description' => 'A selection of herbal and caffeinated teas, served hot or iced',
                'price' => 20000,
                'stock' => 25,
                'menu_category_id' => 6, // Beverages
            ],
            [
                'name' => 'Fresh Lemonade',
                'description' => 'Freshly squeezed lemonade, served over ice',
                'price' => 30000,
                'stock' => 15,
                'menu_category_id' => 6, // Beverages
            ],
            [
                'name' => 'Iced Tea',
                'description' => 'Brewed tea served over ice, sweetened or unsweetened',
                'price' => 25000,
                'stock' => 18,
                'menu_category_id' => 6, // Beverages
            ],
            [
                'name' => 'Soda',
                'description' => 'A selection of popular sodas, served chilled',
                'price' => 20000,
                'stock' => 20,
                'menu_category_id' => 6, // Beverages
            ],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
