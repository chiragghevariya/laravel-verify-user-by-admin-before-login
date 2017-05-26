<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

        	'name'=>'admin',
        	'email'=>'admin@gmail.com',
        	'password'=>bcrypt(1234),
        	'state'=>1,
        	'verify'=>'Active',
        	]);
    }
}
