<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property;
use App\Models\like;

class dashbordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $properties = property::with('PropertyImage')->where('user_id',auth()->id());

        $PublishedProperties = $properties->count();

        $propertyIds = $properties->pluck('id');
        $totalLikes = Like::whereIn('property_id', $propertyIds)->count();





        return view('pages.dashbord',[
            'PublishedProperties' => $PublishedProperties,
            'totalLikes' => $totalLikes,
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
        //
    }
}
