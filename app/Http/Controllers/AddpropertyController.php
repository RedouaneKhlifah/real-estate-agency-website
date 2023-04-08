<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use App\Models\property;
use App\Models\PropertyImage;
use Illuminate\Http\Request;

class AddPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.addproperty');
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
        $fields = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'type' => 'required|string',
            'rooms' => 'required|string',
            'price' => 'required|integer',
            'area' => 'required|integer',
            'images' => 'required|array',
            'images.*' => 'required|image',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'neighborhood' => 'required|string',
            'Age' => 'required|string',
            'beds' => 'required|string',
            'bathRooms' => 'required|string',
            'Features' => 'required',
        ]);

      
    
        $features = implode(',', $fields['Features']);
        $user_id = auth()->id();

        

        
    
       
        $property = Property::create([
            'title' => $fields['title'],
            'description' => $fields['description'],
            'type' => $fields['type'],
            'rooms' => $fields['rooms'],
            'price' => $fields['price'],
            'area' => $fields['area'],
            'address' => $fields['address'],
            'city' => $fields['city'],
            'state' => $fields['state'],
            'neighborhood' => $fields['neighborhood'],
            'Age' => $fields['Age'],
            'beds' => $fields['beds'],
            'bathRooms' => $fields['bathRooms'],
            'Features' => $features,
            'user_id' => $user_id,
        ]);

        
  
        foreach ($fields['images'] as $image) {

            
            $title = date('Ymdhis') . '_' . Str::random(10) . '.'  . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/uploads'), $title);
    
            PropertyImage::create([
                'property_id' => $property->id,
                'image' => $title,
            ]);
        }

        return redirect('/properties');
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
