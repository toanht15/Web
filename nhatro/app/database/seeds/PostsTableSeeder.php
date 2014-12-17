<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{

		$content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
		for($i=1; $i<50; $i++)
		{
			$post = new Post;
			$post->title = "Post no $i";
			$post->content = $content;
			$post->area = rand(10,50);
			$post->price = rand(1000000,5000000);
			$post->user_id = rand(1,30);
			$post->district = "Hai Ba Trung";
			$post->city = "Ha Noi";
			// $post->timestamps = false;
			$post->created_at = \Carbon\Carbon::now()->toDateTimeString();
			$post->updated_at = \Carbon\Carbon::now()->toDateTimeString();
			$post->save();
		}
	}

}