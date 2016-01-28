<?php

namespace App\Http\Controllers;

use \DB;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->select('id', 'username')->distinct()->get();
        $movies = DB::table('movies')->select()->distinct()->get();

        foreach($users as $user){
            $user_movies = DB::table('user_movie')->select('movie_id', 'status')
                ->where('user_id', '=', $user->id)
                ->get();
            $user->movies = [];
            foreach($user_movies as $user_movie){
                $movie = DB::table('movies')->select()->distinct()
                    ->where('id', '=', $user_movie->movie_id)->get();
                $movie[0]->status = $user_movie->status;
                $user->movies = $movie;
            }
        }
        $responseArray = [
            'success'=> true,
            'users' => $users
        ];
        return $responseArray;
    }
}
