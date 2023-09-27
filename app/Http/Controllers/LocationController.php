<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\City;
use App\Models\County;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::all();

        $data = [
            'locations' => $locations
        ];

        return view('/locations/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::all();
        $counties = County::all();

        $data=[
            'cities' => $cities,
            'counties' => $counties
        ];
        return view('/locations/new', $data);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newLocation= new Location();

        $newLocation->nume = $request->nume_locatie;
        $newLocation->adresa = $request->adresa;
        $newLocation->city_id = $request->city_id;
        $newLocation->county_id = $request->county_id;

        $newLocation->save();

        return Redirect::to('/locations');

    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $location = Location::where('id', '=', $id)->delete();

        return Redirect::to('/locations');
    }
}
