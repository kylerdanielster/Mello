<?php
/**
 * Created by PhpStorm.
 * User: kyle
 * Date: 11/3/15
 * Time: 6:42 PM
 */

use Faker\Factory as Faker;

class BoardTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 10) as $index)
        {
            App\Board::create([
                'board_name' => $faker->company,
                'user_id' => $index
            ]);
        }
    }
}