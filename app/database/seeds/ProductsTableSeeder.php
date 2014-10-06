<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder {

	public function run()
	{
        Eloquent::unguard();
		$faker = Faker::create();

        $cat = Category::all();
		foreach(range(1, 12) as $index)
		{

			Product::create([
                'category_id'=>rand(1,2),
                'title'=> $faker->name,
                'description'=>$faker->sentence(10),
                'price'=>$faker->randomNumber(3),
                'availability'=>rand(0,1),
                'image'=>$faker->imageUrl(500, 300, 'technics')

			]);
		}
	}

}