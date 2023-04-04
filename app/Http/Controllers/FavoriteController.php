<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        $favorites = auth()->user()->favorites; // Assuming your User model has a `favorites` relationship
        
        return view('favorites.index', compact('favorites'));
    }
    

}


