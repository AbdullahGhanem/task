<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Product;
use App\User;

class ProductTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{ 

		$usersId = User::pluck('id')->all();

		$faker = Faker::create();

		foreach (range(1,10) as $index) {
			Product::create([
				'code'  		=> $faker->randomNumber(),
				'name'  		=> $faker->sentence(2),
				'description'  	=> $faker->paragraph(6),
				'price'  		=> 10.99,
				'stock_quantity'=> $faker->randomDigit,
				'discount_pct' 	=> $faker->randomDigit,
			]);
		}
	}

}