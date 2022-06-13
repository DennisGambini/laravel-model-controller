<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function index(){
        $titles = ['Tutti i Movies', 'American Movies', 'British Movies'];
        $movies = Movie::orderBy('title', 'asc')->get();
        $americanMovies = Movie::where('nationality', 'american')->orderBy('title', 'asc')->get();
        $britishMovies = Movie::where('nationality', 'american/british')->orderBy('title', 'asc')->get();
        return view('home', compact('movies', 'americanMovies', 'britishMovies'), ['titles' => $titles]);
    }
}
