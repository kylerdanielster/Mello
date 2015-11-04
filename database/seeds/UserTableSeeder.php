<?php
/**
 * Created by PhpStorm.
 * User: kyle
 * Date: 11/3/15
 * Time: 6:35 PM
 */

use Faker\Factory as Faker;

class UserTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 10) as $index)
        {
            App\User::create([
                'user_name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->password(6, 10)
            ]);
        }
    }
}
