<?php

use Illuminate\Database\Seeder;
// use Illuminate\Database\Eloquent\Model;

class AdminTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

	
		\DB::table('users')->insert(array(
            'first_name'     => 'jinmy',
            'last_name'      => 'solis',
            'email'          => 'solisjinmy@gmail.com',
            'password'       => \Hash::make('137525627jinmy'),
            'type'           => 'admin'

			));

		\DB::table('user_profiles')->insert(array(
            'user_id'     => 1,
            'birthdate'     =>'1977/01/01'
            

			));

		
	}

}