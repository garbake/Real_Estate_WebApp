<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Property;
use App\Models\Property_Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::with('type')->orderBy('Name', 'asc')->get();
        $totalProperties = $properties->count();
        $totalAgents = User::where('role_id', 1)->count();
        $totalCustomers = User::where('role_id', 3)->count();

        
        

        return view('dashboard', [
            'properties' => $properties,
            'totalProperties' => $totalProperties,
            'totalAgents' => $totalAgents,
            'totalCustomers' => $totalCustomers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( string $id)
    {
        $propertyTypes = DB::table('type')->pluck('Name', 'id');

        $property = Property::with('location')->where('id', $id)->first();
        $location = Location::where('id', $property->Location_Id)->first();
         $images = $property->images;

        return view('property.edit', [
            'property' => $property,
            'propertyTypes' => $propertyTypes,
            'location' => $location,
            'images' => $images
            
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
