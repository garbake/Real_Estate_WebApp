<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Property;
use App\Models\Property_Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('Property.index', [

            'properties' => Property::orderBy('updated_at', 'desc')->get(),
            
            
        ]);

       

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $propertyTypes = DB::table('type')->pluck('Name', 'id');
        return view('Property.create',['propertyTypes' => $propertyTypes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        // First, create or find the location based on the input
        $location = Location::firstOrCreate([
            'street' => $request->input('street'),
            'town' => $request->input('town'),
            'parish' => $request->input('parish'),
        ]);

        //Then,Create a property 
        $property = new Property();
        $property->Agent_Id = Auth::id();
        $property->Name = $request->property_name;
        $property->Size =$request->property_size;
        $property->Price =$request->price;
        $property->Currency = $request->currency;
        $property->Number_Bedrooms = $request->Num_of_Bedroom;
        $property->Number_Bathrooms = $request->Num_of_Bathroom;
        $property->Number_Kitchen = $request->Num_of_Kitchen;
        $property->Like_Count = '1';
        $property->Type_Id = '1';//$request->property_type;
        $property->Description = $request->description;
        //$property->DisplayImage_Url = 'test'; //$request->propery_dp;

        $property->Location_Id = $location->id;

          // Handle image upload
        if ($request->hasFile('property_dp') && $request->file('property_dp')->isValid()) {
            $image = $request->file('property_dp');
            $cloudinary = Cloudinary::upload($image->getRealPath());
            $property->DisplayImage_url = $cloudinary->getSecurePath();
        }


        $property->save();

        if ($request->hasFile('property_gallary')) {
            foreach ($request->file('property_gallary') as $image) {
                if ($image->isValid()) {
                    $cloudinary = Cloudinary::upload($image->getRealPath());
        
                    $propertyImage = new Property_Image();
                    $propertyImage->Property_Id = $property->id;
                    $propertyImage->Image_Url = $cloudinary->getSecurePath();
        
                    $propertyImage->save();
                }
            }
        }
    }

    /**
     * Display the specified resource.
     

     */
    public function show($id)
    {
        return view('Property.show', [
            'properties' => Property::findOrFail($id),
            'images' => Property_Image::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
