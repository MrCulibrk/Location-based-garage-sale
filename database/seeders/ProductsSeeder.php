<?php

namespace Database\Seeders;

use App\Models\Products;
use Faker\Factory;
use Illuminate\Database\Seeder;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::factory(50)->create();

    }
}
