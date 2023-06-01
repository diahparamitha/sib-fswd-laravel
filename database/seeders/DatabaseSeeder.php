<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $faker = Faker::create('id_ID');

        User::create([
            'name' => 'Diah Paramitha',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'avatar' => $faker->imageUrl(1920, 1440),
            'phone' => '089767543456',
            'address' => "Jalan Baru",
            'password' => bcrypt('password123'),
        ]);

         User::create([
            'name' => 'Paramitha',
            'email' => 'staff@gmail.com',
            'role' => 'staff',
            'avatar' => $faker->imageUrl(1920, 1440),
            'phone' => '089767543456',
            'address' => "Jalan Baru",
            'password' => bcrypt('password123'),
        ]);

          User::create([
            'name' => 'Diah',
            'email' => 'user@gmail.com',
            'role' => 'user',
            'avatar' => $faker->imageUrl(1920, 1440),
            'phone' => '089767543456',
            'address' => "Jalan Baru",
            'password' => bcrypt('password123'),
        ]);

         //User::factory(9)->create();

         Category::create([
            'name' => 'Laptop',
            'image' => $faker->imageUrl(1920, 1440),
        ]);

         Category::create([
            'name' => 'Phone',
            'image' => $faker->imageUrl(1920, 1440),
        ]);

         Category::create([
            'name' => 'Tablet',
            'image' => $faker->imageUrl(1920, 1440),
        ]);

         Category::create([
            'name' => 'TV',
            'image' => $faker->imageUrl(1920, 1440),
        ]);


        Product::factory(5)->create();

          Slider::create([
            'name' => 'TV',
            'image' => $faker->imageUrl(1920, 1440),
        ]);
    }
}
