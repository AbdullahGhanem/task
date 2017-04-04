<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Product;
use App\Category;

class CategoryProductTableSeeder extends Seeder {

    public function run()
    {

     	$proId  = Product::pluck('id')->all();
     	$cateId = Category::pluck('id')->all();

		$faker = Faker::create();

		foreach ($proId as $index) {
			
			DB::table('category_product')->insert([
				'product_id' => $index,
				'category_id' => $faker->randomElement($cateId)
			]);
		}

    }

}