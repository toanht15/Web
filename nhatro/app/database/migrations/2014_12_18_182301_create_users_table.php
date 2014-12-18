<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email', 32)->unique();
			$table->string('username', 32)->unique();
			$table->string('password');
			$table->string('remember_token', 100)->nullable();
			$table->string('phonenumber', 16)->nullable();
			$table->string('firstname', 30)->nullable();
			$table->string('lastname', 30)->nullable();
			$table->string('address', 30)->nullable();
			$table->integer('role')->default(0);
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
		Schema::drop('users');
	}

}
