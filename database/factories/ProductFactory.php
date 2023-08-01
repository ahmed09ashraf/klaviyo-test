<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
//            'name' => $this->faker->sentence(3),
//            'author' => $this->faker->name,
//            'price' => $this->faker->randomFloat(2, 10, 100),
//            'image' => $this->faker->imageUrl(150, 200, 'books', true),
        ];
    }
}
