<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('documents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->date('document_date');
			$table->date('actual_date');
			$table->integer('user_id');
			$table->integer('document_number')->unsigned();
			$table->enum('os_type', array(
				'movables',
				'value_movables',
				'buildings',
				'parcels'
			));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('documents');
	}

}
