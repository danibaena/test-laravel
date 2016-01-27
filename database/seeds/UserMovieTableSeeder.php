<?php

use Illuminate\Database\Seeder;

class UserMovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_movie')->insert([
        	[
        		'user_id' => 1,
        		'movie_id' => 1,
        		'status' => 's'
        	],
        	[
        		'user_id' => 1,
        		'movie_id' => 2,
        		'status' => 's'
        	],
        	[
        		'user_id' => 2,
        		'movie_id' => 2,
        		'status' => 'p'
        	],
        	[
        		'user_id' => 1,
        		'movie_id' => 3,
        		'status' => 's'
        	],
        	[
        		'user_id' => 3,
        		'movie_id' => 1,
        		'status' => 'n'
        	],
        	[
        		'user_id' => 2,
        		'movie_id' => 4,
        		'status' => 'n'
        	],
        	[
        		'user_id' => 1,
        		'movie_id' => 5,
        		'status' => 's'
        	],
        	[
        		'user_id' => 2,
        		'movie_id' => 7,
        		'status' => 'p'
        	],
        ]);
    }
}
