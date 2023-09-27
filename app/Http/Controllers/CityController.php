<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\County;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::all();

        $data=[
            'cities' => $cities
        ];

        return view('/cities/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($county_id)
    {
        $county = County::where('id', '=', $county_id);
        
        $data=[
            'county' => $county
        ];

        return view('/counties/edit', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $city = new City();

        $city->nume= $request->nume_oras;
        $city->county_id= $request->county_id;

        $city->save();

        return Redirect::to('/counties/edit/'.$request->county_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $city = City::where('id', '=', $id)->delete();

        return Redirect::to('/cities');
    }
}
