<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	$faker = Faker::create();
     	foreach (range(1,10) as $index) {
	    	 DB::table('produto')->insert(['produto' => $faker->lastName,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")  ]);     		
     	}

     	// $this->call(UsersTableSeeder::class);
    }
}
