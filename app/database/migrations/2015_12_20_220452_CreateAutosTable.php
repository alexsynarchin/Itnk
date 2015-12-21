<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('brand');
			$table->string('model');
			$table->date('manufacture_year');
			$table->string('vin');
			$table->string('kpp');
			$table->string('engine');
			$table->integer('power');
			$table->string('color');
			$table->enum('car_type',array(
					'car',
					'truck'
			));
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
		Schema::drop('autos');
	}

}
