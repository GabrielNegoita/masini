<?php

namespace App\Http\Controllers;

use App\Models\County;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CountyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $counties = County::all();

        $data=[
            'counties' => $counties
        ];

        return view('/counties/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('/counties/new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $county = new County();
        
        $county->nume = $request->nume;

        $county->save();

        return Redirect::to('/counties');
    }

    /**
     * Display the specified resource.
     */
    public function show(County $county)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $county= County::find($id);
        $cities= City::where('county_id', $id)->get();
        $data=[
            'county'=> $county,
            'cities' => $cities
        ];
        
        return view('counties/edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, County $county)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $county = County::where('id', '=', $id)->delete();
        return Redirect::to('/counties');
    }

    public function getCities($id){
        $cities= City::where('county_id', '=', $id)->get();
        return $cities->toJson();
    }
}
