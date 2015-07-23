<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menus', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('code', 20);
			$table->string('name', 500);
			$table->text('description')->nullable();
			$table->text('short_description')->nullable();
			$table->string('picture', 255)->nullable();
			$table->smallInteger('status');
			$table->integer('parent_id');
			$table->integer('ordering');
			$table->timestamps();
			$table->integer('created_by');
			$table->integer('updated_by');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('menus');
	}

}
