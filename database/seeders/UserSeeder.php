<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Generator\Faker\Factory;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        require_once 'vendor/autoload.php';

        $faker = \Faker\Factory::create();

        // $roles = ['admin', 'restaurant', 'customer'];
        user::create([
            'name' => 'aldi',
            'email' => 'aldizar25@gmail.com',
            'password' => Hash::make('password'), // A common demo password
            'role' => 'admin',
            'phone' => '0852'

        ]);
        // for ($i = 0; $i < 10; $i++) {
        //     User::create([
        //         'name' => $faker->name(),
        //         'email' => $faker->unique()->safeEmail,
        //         'password' => Hash::make('password'), // A common demo password
        //         'role' => $roles[array_rand($roles)],
        //         'phone' => $faker->randomNumber(5, true)
        //     ]);
        // }
    }
}
