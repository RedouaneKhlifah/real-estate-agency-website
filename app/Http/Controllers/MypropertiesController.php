<?php

namespace App\Http\Controllers;

use App\Models\property;
use Illuminate\Http\Request;
use App\Models\like;
use App\Models\user;
use PhpParser\Builder\Property as BuilderProperty;

class MypropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $property = property::with('PropertyImage')->where('user_id',auth()->id())->paginate(3);
        $user = user::find(auth()->id());

        // dd($user);
        
        // $properties = Property::with('PropertyImage')->get();

        // // Loop through each property and append the count of likes to it
        // $property = $properties->map(function($property){
        //     $likeCount = like::where('property_id', $property->id)->count();
        //     $property->like_count = $likeCount;
        //     return $property;
        // });


      
        return view('pages.Myproperties',[
            'properties' => $property,
            'user' => $user
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
        $property  = property::find($id);
        dd($property);
        $property->delete();
        redirect()->back();
    }
}
