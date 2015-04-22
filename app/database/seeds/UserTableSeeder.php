<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 21-4-2015
 * Time: 16:14
 */
class UserTableSeeder extends Seeder{
    public function run(){
        $faker = Faker\Factory::create();

        for($i = 0; $i < 10; $i++):
            $user = User::create(array(
                'email' => $faker->email,
                'username' => $faker->unique->username,
                'password' => $faker->word,
                'remember_token' => str_random(50),
            ));
        endfor;
    }
}