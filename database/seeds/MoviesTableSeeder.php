<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
        	[
        		'id' => 1,
        		'imdb_id' => 'tt0110912',
        		'name' => 'Pulp Fiction'
        	],
        	[
        		'id' => 2,
        		'imdb_id' => 'tt0099685',
        		'name' => 'Uno de los nuestros'
        	],
        	[
        		'id' => 3,
        		'imdb_id' => 'tt0102926',
        		'name' => 'El silencio de los corderos'
        	],
        	[
        		'id' => 4,
        		'imdb_id' => 'tt0081505',
        		'name' => 'El resplandor'
        	],
        	[
        		'id' => 5,
        		'imdb_id' => 'tt0169547',
        		'name' => 'American Beauty'
        	],
        	[
        		'id' => 6,
        		'imdb_id' => 'tt0268978',
        		'name' => 'Una mente maravillosa'
        	],
        	[
        		'id' => 7,
        		'imdb_id' => 'tt0405159',
        		'name' => 'Million Dollar Baby'
        	]
        ]);
    }
}
