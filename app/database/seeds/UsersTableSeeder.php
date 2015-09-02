<?php

/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 02.09.2015
 * Time: 6:32
 */
class UsersTableSeeder extends Seeder
{
    public function run(){
        DB::table('users') -> delete();
        $users = array(
            array(
                'first_name' => 'Ильмира',
                'last_name' => 'Латыпова',
                'username' => '1-0274903453',
                'password' => Hash::make('ab423cl7'),
                'organization_id' => '1'
            )
        );
        DB::table('users') -> insert($users);
    }
}