<?php

namespace App\Http\Controllers;

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
        //
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
        //
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
