<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		User::truncate();

		User::create(array(
			'username' => 'philipbrown',
			'first_name' => 'Philip',
			'last_name' => 'Brown',
			'email' => 'name@domain.com',
			'password' => 'qwerty'
			));
		foreach(range(1, 10) as $index)
		{
            User::create([  
                'username' => str_replace('.', '_', $faker->unique()->userName),  
                'email' => $faker->email,  
                'password' => 'password'
            ]);  
		}
	}

}