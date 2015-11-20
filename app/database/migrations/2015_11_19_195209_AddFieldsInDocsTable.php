<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsInDocsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('documents', function($table){
			$table->decimal('doc_carrying_amount', 20 , 2);
			$table->decimal('doc_residual_value', 20 , 2);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('documents', function($table){
			$table->dropColumn('doc_carrying_amount', 'doc_residual_value');
		});

	}

}
