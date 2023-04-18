<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favourate;

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

        $user = auth()->user();
    $propertyId = $request->input('Property_Id');
    $favorite = Favourate::firstOrCreate([
        'User_Id' => $user->id,
        'Property_Id' => $propertyId,
    ]);
    return response()->json(['success' => true]);

    }

    public function removeFavoriteProperty(Request $request)
{
    $user = auth()->user();
    $propertyId = $request->input('Property_Id');
    Favourate::where('User_Id', $user->id)
        ->where('Property_Id', $propertyId)
        ->delete();
    return response()->json(['success' => true]);
}
    
public function showFavorites()
{
    $user = auth()->user();
    $favorites = Favourate::where('User_Id', $user->id)
        ->with('property')
        ->orderByDesc('created_at')
        ->get();
    return view('favorites.index', ['favorites.index' => $favorites]);
}

}


