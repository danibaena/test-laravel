<?php

namespace App\Http\Controllers;

use \DB;
use Validator;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $movies = DB::table('movies')->select()->distinct()->get();
        $responseArray = [
            'success'=> true,
            'movies' => $movies
        ];
        return $responseArray;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'imdb_id' => 'required|max:255',
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            $response = ['success' => false];
        } else {
            $response = ['success' => true];
            DB::table('movies')->insertGetId(
                ['imdb_id' => $request->imdb_id, 'name' => $request->name]
            );
        }
        
        return $response;
    }
}
