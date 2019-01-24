<?php

use App\User;
use App\UserFriend;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        $friend = [];
        for($i=0; $i<5; $i++) {
            $friend[] = $faker->unique()->name;
        }

        for ($i=0; $i<5; $i++) {
            $user = User::create([
                'facebook_id' => str_random(16),
                'name' => $faker->unique()->name,
                'age' => rand(29, 30)
            ]);

            $k = $i;
            for ($j=0; $j<3; $j++) {
                if ($k ==4) {
                    $k=0;
                }
                UserFriend::create([
                    'user_id' => $user->getKey(),
                    'name' => $friend[$k]
                ]);
                $k++;
            }
        }
    }
}
