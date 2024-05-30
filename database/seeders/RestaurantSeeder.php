<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [
            [
                'name' => 'The Korean BBQ',
                'address' => 'Jalan Sudirman 456',
                'phone_number' => '090123456789',
                'open_time' => Carbon::parse('16:00:00'),
                'close_time' => Carbon::parse('05:00:00'),
                'email' => 'thekoreanbbq@example.com',
                'password' => bcrypt('password'),
                'category_id' => 1,
                'number_of_tables' => 10,
            ],
            [
                'name' => 'The Sushi Place',
                'address' => 'Jalan Sudirman 890',
                'phone_number' => '086789012345',
                'open_time' => Carbon::parse('12:30:00'),
                'close_time' => Carbon::parse('01:30:00'),
                'email' => 'thesushiplace@example.com',
                'password' => bcrypt('password'),
                'category_id' => 2,
                'number_of_tables' => 7,
            ],
            [
                'name' => 'The Steak House',
                'address' => 'Jalan Sudirman 345',
                'phone_number' => '087890123456',
                'open_time' => Carbon::parse('13:00:00'),
                'close_time' => Carbon::parse('02:00:00'),
                'email' => 'thestakehouse@example.com',
                'password' => bcrypt('password'),
                'category_id' => 3,
                'number_of_tables' => 10,
            ],
            [
                'name' => 'The Indian Cafe',
                'address' => 'Jalan Sudirman 678',
                'phone_number' => '088901234567',
                'open_time' => Carbon::parse('14:00:00'),
                'close_time' => Carbon::parse('03:00:00'),
                'email' => 'theindiancafe@example.com',
                'password' => bcrypt('password'),
                'category_id' => 4,
                'number_of_tables' => 9,
            ],
            [
                'name' => 'The Coffee Shop',
                'address' => 'Jalan Sudirman 901',
                'phone_number' => '089012345678',
                'open_time' => Carbon::parse('15:00:00'),
                'close_time' => Carbon::parse('04:00:00'),
                'email' => 'thecoffeeshop@example.com',
                'password' => bcrypt('password'),
                'category_id' => 5,
                'number_of_tables' => 8,
            ],
            [
                'name' => 'The Japanese Restaurant',
                'address' => 'Jalan Sudirman 111',
                'phone_number' => '091234567890',
                'open_time' => Carbon::parse('17:00:00'),
                'close_time' => Carbon::parse('06:00:00'),
                'email' => 'thejapaneserestaurant@example.com',
                'password' => bcrypt('password'),
                'category_id' => 6,
                'number_of_tables' => 12,
            ],
            [
                'name' => 'The Thai Food',
                'address' => 'Jalan Sudirman 222',
                'phone_number' => '092345678901',
                'open_time' => Carbon::parse('18:00:00'),
                'close_time' => Carbon::parse('07:00:00'),
                'email' => 'thethaifood@example.com',
                'password' => bcrypt('password'),
                'category_id' => 7,
                'number_of_tables' => 9,
            ],
            [
                'name' => 'The Vietnamese Noodle',
                'address' => 'Jalan Sudirman 333',
                'phone_number' => '093456789012',
                'open_time' => Carbon::parse('19:00:00'),
                'close_time' => Carbon::parse('08:00:00'),
                'email' => 'thevietnamesenoodle@example.com',
                'password' => bcrypt('password'),
                'category_id' => 8,
                'number_of_tables' => 11,
            ],
            [
                'name' => 'The Burger Joint',
                'address' => 'Jalan Sudirman 444',
                'phone_number' => '094567890123',
                'open_time' => Carbon::parse('20:00:00'),
                'close_time' => Carbon::parse('09:00:00'),
                'email' => 'theburgerjoint@example.com',
                'password' => bcrypt('password'),
                'category_id' => 1,
                'number_of_tables' => 10,
            ],
            [
                'name' => 'The Pizza Place',
                'address' => 'Jalan Sudirman 555',
                'phone_number' => '095678901234',
                'open_time' => Carbon::parse('21:00:00'),
                'close_time' => Carbon::parse('10:00:00'),
                'email' => 'thepizzaplace@example.com',
                'password' => bcrypt('password'),
                'category_id' => 2,
                'number_of_tables' => 12,
            ],
            [
                'name' => 'The Italian Bistro',
                'address' => 'Jalan Sudirman 666',
                'phone_number' => '096789012345',
                'open_time' => Carbon::parse('22:00:00'),
                'close_time' => Carbon::parse('11:00:00'),
                'email' => 'theitalianbistro@example.com',
                'password' => bcrypt('password'),
                'category_id' => 3,
                'number_of_tables' => 11,
            ],
            [
                'name' => 'The Chinese Restaurant',
                'address' => 'Jalan Sudirman 777',
                'phone_number' => '097890123456',
                'open_time' => Carbon::parse('07:00:00'),
                'close_time' => Carbon::parse('14:00:00'),
                'email' => 'thechineserestaurant@example.com',
                'password' => bcrypt('password'),
                'category_id' => 4,
                'number_of_tables' => 9,
            ],
            [
                'name' => 'The Breakfast Cafe',
                'address' => 'Jalan Sudirman 888',
                'phone_number' => '098901234567',
                'open_time' => Carbon::parse('08:00:00'),
                'close_time' => Carbon::parse('15:00:00'),
                'email' => 'thebreakfastcafe@example.com',
                'password' => bcrypt('password'),
                'category_id' => 5,
                'number_of_tables' => 10,
            ],
            [
                'name' => 'The Brunch Spot',
                'address' => 'Jalan Sudirman 999',
                'phone_number' => '099012345678',
                'open_time' => Carbon::parse('09:00:00'),
                'close_time' => Carbon::parse('16:00:00'),
                'email' => 'thebrunchspot@example.com',
                'password' => bcrypt('password'),
                'category_id' => 6,
                'number_of_tables' => 11,
            ],
        ];

        foreach ($restaurants as $restaurant) {
            Restaurant::create($restaurant);
        }
    }
}
