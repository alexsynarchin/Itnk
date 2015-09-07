<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users') -> delete();
		$users = array(
			array(
				'first_name' => 'Ильмира',
				'last_name' => 'Латыпова',
				'surname' => 'Раиловна',
				'username' => '1-0274903453',
				'password' => Hash::make('123'),
				'organization_id' => '1'
			)
		);
		DB::table('users') -> insert($users);
	}

}