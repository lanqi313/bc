<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('members', function(Blueprint $table)
		{
			$table->bigInteger('id')->unique();
			$table->primary('id');
			$table->string('nick',120);
			$table->bigInteger('gin_id');
			// $table->foreign('gin_id')->references('id')->on('groups');
			$table->string('gender',10);
			$table->string('country',60);
			$table->string('province',30);
			$table->string('city',60);
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
		Schema::drop('members');
	}

}
