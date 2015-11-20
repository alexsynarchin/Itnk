<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsInOranzationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('organizations', function($table){
			$table->decimal('org_carrying_amount', 25 , 2);
			$table->decimal('org_residual_value', 25 , 2);
			$table->decimal('org_movables_carrying_amount', 25 , 2);
			$table->decimal('org_value_movables_carrying_amount', 25 , 2);
			$table->decimal('org_buildings_carrying_amount', 25 , 2);
			$table->decimal('org_parcels_carrying_amount', 25 , 2);
			$table->decimal('org_movables_residual_value', 25 , 2);
			$table->decimal('org_value_movables_residual_value', 25 , 2);
			$table->decimal('org_buildings_residual_value', 25 , 2);
			$table->decimal('org_parcels_residual_value', 25 , 2);
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
			$table->dropColumn('org_carrying_amount', 'org_residual_value', 'org_movables_carrying_amount', 'org_value_movables_carrying_amount', 'org_buildings_carrying_amount', 'org_parcels_carrying_amount', 'org_movables_residual_value', 'org_value_movables_residual_value', 'org_buildings_residual_value','org_parcels_residual_value'   );
		});
	}

}
