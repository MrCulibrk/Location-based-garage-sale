<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Products::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'productName' =>$this->faker->name(),
            'description' =>$this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'location' =>$this->faker->city(),
            'user_id' =>$this->faker->numberBetween($min = 0, $max = 100),
            'Pics' =>$this->faker->imageUrl($width = 400, $height = 300, 'cats'),
            'geolat' => $this->faker->randomFloat(5, 51.0167, 51.4167),
            'geolng' => $this->faker->randomFloat(5, 4.2667, 4.6667),
            'price' => $this->faker->randomFloat(2,0,100),
            'active' => 0

        ];
    }
}
