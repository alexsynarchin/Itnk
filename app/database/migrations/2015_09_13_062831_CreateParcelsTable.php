<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParcelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parcels', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cadastral');
			$table->string('assigning_land');
			$table->integer('area');
			$table->integer('item_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parcels');
	}

}
