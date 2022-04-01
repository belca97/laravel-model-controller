<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $movies = Movie::all();
        //dd($movies); // <-- Restituisce tutte le righe della tabella
        return view('home', compact('movies'));
    }
}
