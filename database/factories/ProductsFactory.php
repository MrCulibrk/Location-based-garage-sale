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
            'user_id' =>$this->faker->numberBetween($min = 0, $max = 100)
        ];
    }
}
