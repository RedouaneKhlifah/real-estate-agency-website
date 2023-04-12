<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property;


class propertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $property = Property::with('PropertyImage')->where('status', true)->get();
        $Count = $property->count();
        $Some =  $property->count();



        return view('pages.properties',[
            'properties' => $property ,
            'count' => $Count,
            'some' =>  $Some,
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

        
   
        $property = Property::with('PropertyImage')->where('status', true)->get();
        $Count = $property->count();

       
     // Retrieve the values of the checked checkboxes for property types and cities
     $propertyTypes = $request->input('type');
     $cities = $request->input('city');
 


     $features = $request->input('FEATURES', []); 
    
     
     
 
     // Perform filtering based on the selected checkboxes
     $filteredData = property::query()->where('status', true);

 
     // Filter by property types
     $filteredData = $this->filterData($filteredData, 'type', $propertyTypes);
 
     // Filter by cities
     $filteredData = $this->filterData($filteredData, 'city', $cities);

     $filteredData = $this->filterData($filteredData, 'Features', $features);


     
 
     // Add more filtering conditions based on other checkboxes as needed

        switch ($request->sort_by) {
            case 'Oldest':
                $filteredData->orderBy('created_at', 'desc');
                break;
            case 'title_asc':
                $filteredData->orderBy('title', 'asc');
                break;
            case 'title_desc':
                $filteredData->orderBy('title', 'desc');
                break;
            default:
                $filteredData->orderBy('created_at', 'asc');
                break;
        }
 
     // Execute the query and retrieve the filtered data
     $filteredData = $filteredData->get();
     $Some =  $filteredData->count();

     
 
     // Pass the filtered data to the view or perform other actions as needed
     return view('pages.properties', [
    'properties' => $filteredData,
     'count' => $Count,
     'some' =>  $Some,
    
    ]);
 }
 
 public function filterData($query, $filterType, $filterValues)
 {
     if (!empty($filterValues)) {
         return $query->where(function ($query) use ($filterType, $filterValues) {
             foreach ($filterValues as $filterValue) {
                 if ($filterType === 'Features') {
                     // Convert string to array and filter
                     $filterValueArray = explode(',', $filterValue);
                     foreach ($filterValueArray as $filterValueItem) {
                        $query->orWhereRaw("FIND_IN_SET(?, $filterType) > 0", [$filterValueItem])
                        ->orderByRaw("FIND_IN_SET(?, $filterType) DESC", [$filterValueItem]);
                     }
                 } else {
                     // For other filter types, use regular where clause
                     $query->orWhere($filterType, $filterValue);
                 }
             }
         });
     }
 
     return $query;
 }
 

 

 

    /**
     * Display the specified resource.
     */
    // public function filter(Request $request)
    // {


    //     dd($request);
    //     // if ($props == 'latest'){
    //     //     $property = property::with('PropertyImage')->latest()->get();
    //     // }

    //     // return view('pages.properties',[
    //     //     'properties' => $property ,
    //     // ]);
    // }

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
