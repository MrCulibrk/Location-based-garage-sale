<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user = new User();
        // $user->name = "Sophie";
        // $user->email = "Sophie";
        // $user->password = "Sophie";
        // $user->save();
        //factory(\App\Models\User::class,50)->create();
        User::factory(50)->create();
    }
}
