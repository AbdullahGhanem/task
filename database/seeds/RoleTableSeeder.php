<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Role;

class RoleTableSeeder extends Seeder {

    public function run()
    {

		$admin = Role::create([
		    'name' => 'admin',
		    'slug' => 'admin',
		]);

		$editor = Role::create([
		    'name' => 'editor',
		    'slug' => 'editor',
		]);

		$user = Role::create([
		    'name' => 'user',
		    'slug' => 'user',
		]);
    }

}