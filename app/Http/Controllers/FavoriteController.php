<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index()
    {
        $user = Auth::user();
    $favorites = $user->like_properties()->get();
    return view('favorites.index', ['favorites' => $favorites]);

        
    }
    
    public function addFavorite(Request $request)
    {
        $user = Auth::user();
        $propertyId = $request->input('property_id');
        $user->favorites()->attach($propertyId);
        return response()->json(['success' => true]);


    }
    
}


