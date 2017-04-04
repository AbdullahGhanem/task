<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Category;

class CategoryTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{ 

		$faker = Faker::create();

		foreach (range(1,5) as $index) {
			
			Category::create([
				'code' 				=> $faker->randomNumber(),
				'name' 				=> $faker->sentence(2),
				'description'  		=> $faker->paragraph(6),
				'max_discount_pct' 	=> $faker->randomDigit,
			]);
		}
	}
}