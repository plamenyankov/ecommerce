<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
        User::truncate();
		$faker = Faker::create();
        $faker->seed(1234);
        User::create([
            'firstname'=>'admin',
            'lastname'=>$faker->lastName,
            'email'=>$faker->email,
            'password'=>Hash::make(1234),
            'telephone'=>$faker->phoneNumber,
            'admin'=>1
        ]);
		foreach(range(1, 10) as $index)
		{
			User::create([
                'firstname'=>$faker->name,
                'lastname'=>$faker->lastName,
                'email'=>$faker->email,
                'password'=>Hash::make(1234),
                'telephone'=>$faker->phoneNumber,
                'admin'=>0
			]);
		}
	}

}