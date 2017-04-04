<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
		$user = User::create([
			'name'     => 'abdullah ghanem',
			'username' => 'abdullahghanem',
			'email'    => '3bdullah.ghanem@gmail.com',
			'password' => bcrypt('45644564')
		]);
		
		$user->attachRole(1);
		$user->attachRole(2);
		$user->attachRole(3);


		$faker = Faker::create();
		foreach (range(1,40) as $index) {
			
			$user = User::create([
				'name'     => $faker->name,
				'username' => $faker->username,
				'email'    => $faker->email,
				'password' => bcrypt('45644564')
			]);
		}
    }

}