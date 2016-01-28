<?php

namespace App\Http\Controllers;

use \DB;
use Validator;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserMovieController extends Controller
{
    /**
     * Store a newly created resource in storage.
     * @param  int  $userId
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $userId)
    {
        $validator = Validator::make($request->all(), [
            'movie_id' => 'required',
        ]);

        if ($validator->fails()) {
            $response = ['success' => false];
        } else {
            $checkMovieId = DB::table('movies')->select()->distinct()->where('id', '=', $request->movie_id)->get();
            $checkUserId = DB::table('users')->select()->distinct()->where('id', '=', $userId)->get();
            $checkSuscription = DB::table('user_movie')->select()
            ->where('movie_id', '=', $request->movie_id)
            ->where('user_id', '=', $userId)
            ->get(); 

            if((!empty($checkMovieId)) && (!empty($checkUserId)) && (empty($checkSuscription))){
                $response = ['success' => true];
                DB::table('user_movie')->insertGetId(
                    ['user_id' => $userId, 'movie_id' => $request->movie_id, 'status' => 'n']
                );
            } else{
                $response = ['success' => false];
            }        
        }
        return $response;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $userId
     * @param  int  $movieId
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userId, $movieId)
    {        
        $validator = Validator::make($request->all(), [
            'new_status' => 'required|in:s,n,p',
        ]);

        if ($validator->fails()) {
            $response = ['success' => false];
        } else {
            $checkSuscription = DB::table('user_movie')->select()
            ->where('movie_id', '=', $movieId)
            ->where('user_id', '=', $userId)
            ->get();

            if(empty($checkSuscription)){
                $response = ['success' => false];
            } else{
                DB::table('user_movie')
                    ->where('movie_id', '=', $movieId)
                    ->where('user_id', '=', $userId)
                    ->update(['status' => $request->new_status]);
                $response = ['success' => true];
            }
        }
        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $userId
     * @param  int  $movieId
     * @return \Illuminate\Http\Response
     */
    public function destroy($userId, $movieId)
    {
        //
    }
}
