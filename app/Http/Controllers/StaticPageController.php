<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;

class StaticPageController extends Controller
{
    /**HOMEPAGE */
    public function home() {
        $beers = Beer::all();
        return view('home', compact('beers'));
    }

    /**ABOUT */
    public function about() {
        return view('about');
    }
}
