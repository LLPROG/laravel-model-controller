<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class PageController extends Controller
{
    public function Index(){
        $movie = Movie::all();
        $data = [
            'data' => $movie
        ];

        return view('guest.home', $data);

    }
}
