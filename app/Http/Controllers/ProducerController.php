<?php

namespace App\Http\Controllers;

use App\Models\Producer;
use App\Models\CarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class ProducerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $producers = Producer::all();

        $data=[
            'producers' => $producers
        ];

        return view('/producers/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('/producers/new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producer = new Producer();

        $producer->nume = $request->nume;

        $producer->save();

        return Redirect::to('/producers');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $producer = Producer::find($id);

        $data = [
            'producer' => $producer
        ];
        return view('/producers/show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producer $producer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producer $producer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producer = Producer::where('id', '=', $id)->delete();

        return Redirect::to('/producers'); 
    }
    public function getModels($id){
        $carModels = CarModel::where('producer_id', '=', $id)->get();
        return $carModels->toJson();
    }
}
