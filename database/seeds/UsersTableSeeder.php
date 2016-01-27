<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
	            'id' => 1,
	            'username' => 'marie_binion',
	            'password' => 'secret1',
            ],
            [
	            'id' => 2,
	            'username' => 'paul_mercal',
	            'password' => 'secret2',
            ],
            [
            	'id' => 3,
	            'username' => 'john34',
	            'password' => 'secret3',
            ]
        ]);
    }
}
