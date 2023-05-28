<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 4),
            'name' => $this->faker->name,
            'description' => $this->faker->paragraph(10),
            'price' => $this->faker->randomFloat(2, 20, 50),
            'status' => $this->faker->randomElement(['accepted', 'rejected', 'waiting']),
            'image' => $this->faker->imageUrl(1920, 1440),
            'created_by' => $this->faker->numberBetween(1,2),
            'verified_by' => $this->faker->numberBetween(1,2),
        ];
    }
}
