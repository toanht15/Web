<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('post_id');
			$table->string('title');
			$table->text('content');
			$table->double('area');
			$table->double('price');
			$table->string('district');
			$table->string('city');
			$table->integer('user_id');
			$table->unsignedInteger('view_count')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}	

}
