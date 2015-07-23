<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('code', 20);
			$table->string('name', 500);
			$table->string('author', 500);
			$table->string('product_by_company', 500);
			$table->string('search_text', 2000);
			$table->text('description')->nullable();
			$table->text('short_description')->nullable();
			$table->string('picture', 255)->nullable();
			$table->string('youtube_channel', 500);
			$table->string('youtube_code', 255)->nullable();
			$table->string('link_mp3', 255)->nullable();
			$table->string('type', 255)->nullable();
			$table->smallInteger('status');
			$table->integer('categories_id');
			$table->bigInteger('number_of_view_times');
			$table->bigInteger('number_of_like');
			$table->bigInteger('number_of_share');
			$table->bigInteger('number_of_download');
			$table->smallInteger('show_home_app');
			$table->smallInteger('show_category_app');
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
		Schema::drop('contents');
	}

}
