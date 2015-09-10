<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOsMovablesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('os_movables', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->integer('number');
			$table->decimal('carrying_amount', 10, 2);
			$table->enum('financing_source',array(
				'budget',
				'out_budget'
			));
			$table->string('os_view');
			$table->integer('okof')->length(12);
			$table->text('additional_field');
			$table->integer('document_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('os_movables');
	}

}
