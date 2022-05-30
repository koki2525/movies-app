<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $movies = json_decode(file_get_contents(public_path() . "/movies.json"), true);

        return view('movies/index', compact('movies'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $movies = json_decode(file_get_contents(public_path() . "/movies.json"), true);
        $matches = array();

        foreach($movies as $movie){
            if(preg_match("/\b$search\b/i", $movie['title']) || preg_match("/\b$search\b/i", $movie['year'])) {
                array_push($matches, $movie);
            }
           
        }

        return view('movies.search', compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movies = json_decode(file_get_contents(public_path() . "/movies.json"), true);
        foreach($movies as $movie){
            if($movie['id']==$id){ 
                return view('movies.show',compact('movie'));
            }
        }  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
