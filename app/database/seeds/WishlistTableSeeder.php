<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class WishlistTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Wishlist::create([
                'user_id'=> rand(1,9),
                'product_id'=> rand(1,9)
			]);
		}
	}

}