<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        
        
        return view('home', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::where('id', $id)->first();

        return view('show', compact('movie'));
    }
}
