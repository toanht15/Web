<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{		
		for($i = 1; $i <= 30; $i++)
		{
			$user = new User;
			$user->username = "user$i";
			$user->password = "user@123"."$i";
			$user->email = "user"."$i"."@gmail.com";
			// $user->timestamps = false;
			$user->created_at = \Carbon\Carbon::now()->toDateTimeString();
			$user->updated_at = \Carbon\Carbon::now()->toDateTimeString();
			$user->save();
		}
	}

}