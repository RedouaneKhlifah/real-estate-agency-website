<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\like;
use App\Models\property;
use GuzzleHttp\Psr7\Query;

class favpropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $property = property::with('PropertyImage','like')->whereHas('like', function($query){
            $query->where('user_id',auth()->id());
        })->paginate(3);

    
        
        return view('pages.favproperties',[
            'properties' => $property,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $isExists = like::where([
            'user_id' => auth()->id(),
            'property_id' => $request->property_id
        ])->first();


        if($isExists){
            $isExists->delete();
            return response()->json([],400);
        }else {
         
            like::create([
                'user_id' =>auth()->id(),
                'property_id' =>$request->property_id,
            ]);
            return response()->json([],200);
        }
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
