<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property;

class adminpropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $property = Property::with('PropertyImage')->orderBy('created_at')->paginate(3);




        return view('pages.adminproperties',[
            'properties' => $property ,
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

        $propertyId = $request->property_id;
    
        // Retrieve the property by its ID

        $property = Property::find($propertyId);
    

            // Update the "status" column based on its current value
            $property->status = !$property->status;
            $property->save();
            
            // Return a JSON response with an empty array and an appropriate HTTP status code
            $statusCode = $property->status ? 200 : 400;

            return response()->json([], $statusCode);
 
        
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
