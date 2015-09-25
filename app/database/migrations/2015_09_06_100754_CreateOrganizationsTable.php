<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('organizations', function(Blueprint $t)
		{
			$t -> increments('id');
			$t -> text('full_name');
			$t -> string('short_name');
			$t -> string('inn')->length(10);
			$t -> string('kpp')->length(9);
			$t -> string('legal_address');
			$t -> string('fact_address');
			$t -> string('boss_position')->length(40);
			$t ->string('fio');
			$t -> string('operate_foundation');
			$t -> integer('rs')->length(20)->unsigned();
			$t -> integer('ks')->length(20)->unsigned();
			$t -> string('bank',50)->length(50);
			$t -> integer('bik')->length(9)->unsigned();
			$t -> string('phone')->length(15);
			$t -> string('email')->length(60);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('organizations');
	}

}
