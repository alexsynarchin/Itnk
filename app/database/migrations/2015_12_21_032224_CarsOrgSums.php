<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CarsOrgSums extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('organizations', function($table){
			$table->decimal('org_cars_carrying_amount', 25 , 2);
			$table->decimal('org_cars_residual_value', 25 , 2);
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
			$table->dropColumn('org_cars_carrying_amount', 'org_cars_residual_value'   );
		});
	}

}
