<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
// use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

     $faker=Faker::create();

      for($i = 0; $i < 50; $i++)
      {
          
          
          
            $id= \DB::table('users')->insertGetId(array(
            'first_name'     => $faker->firstName,
            'last_name'      => $faker->lastName,
            'email'          => $faker->unique()->email,
            'password'       => \Hash::make('bebe'),
            'type'           => $faker->randomElement(['editor','colaborador','usuario']),
          

			));


		\DB::table('user_profiles')->insert(array(
            'user_id'     => $id,
            'bio'         =>  $faker->paragraph(rand(2,5)),
            'website'     => 'http://www.'.$faker->domainName,
            'twitter'     => 'http://www.twitter.com/'.$faker->userName,
            'birthdate'   =>$faker->dateTimeBetween('-45 years','-15 years')->format('Y-m-d')
			));



		\DB::table('tags')->insert(array(
            'name'         =>  $faker->word,
            'description'     => $faker->paragraph(rand(2,5)),
          
			));



      }
	
	}

}