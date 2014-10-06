<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder {

	public function run()
	{

		$faker = Faker::create();
$cat = ['Laptop','Phone', 'Tablet'];
		foreach(range(1, 3) as $index)
		{
			Category::create([
                'name'=>$cat[$index-1]
			]);
		}
	}

}