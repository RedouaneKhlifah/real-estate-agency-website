<?php

namespace App\Http\Controllers;

use App\Models\property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = property::inRandomOrder()->take(6)->get();
      
   
        $propertiesByCity = property::groupBy('city')->selectRaw('count(*) as total, city')->pluck('total', 'city');
        
        $Rabat = $propertiesByCity->get('Rabat', 0);
        $Safi = $propertiesByCity->get('Safi', 0);
        $Casablanca = $propertiesByCity->get('Casablanca', 0);
        $Yousoufia = $propertiesByCity->get('Yousoufia', 0);
        $Chefchaouen = $propertiesByCity->get('Chefchaouen', 0);
        $tangier = $propertiesByCity->get('tangier', 0);

        
        

   



        return view('pages.home',[
            'properties' => $properties,
            'Rabat' => $Rabat,
            'Safi' => $Safi,
            'Casablanca' => $Casablanca,
            'Yousoufia' => $Yousoufia,
            'Chefchaouen' => $Chefchaouen,
            'tangier' => $tangier,
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
