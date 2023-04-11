<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property;
use Ramsey\Uuid\FeatureSet;

use Carbon\Carbon;
class propertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
        
        $property = Property::with('PropertyImage','user')->find($id);
        $city  = $property->city;
        $propertyId = $property->id;

       

        $Features =  explode(',',$property->Features );

        $Featureproperties = Property::with('PropertyImage','user')->where('city',$city) ->where('id', '!=', $propertyId)->take(4)->get();
        foreach ($Featureproperties as $Featureproperty) {
          

            $createdAt = new Carbon($Featureproperty->created_at);
            $formattedCreatedAt = $createdAt->format('F d, Y');
            $Featureproperty->format = $formattedCreatedAt;
        }
       

        


        return view('pages.property',[
            'property' => $property ,
            'Features' => $Features,

            'Featureproperties' => $Featureproperties
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
