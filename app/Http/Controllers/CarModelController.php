<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use App\Models\Producer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carModels = CarModel::all();

        $data = [
            'carModels' => $carModels
        ];

        return view('/carModels/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $producers = Producer::all();

        $data = [
            'producers' => $producers
        ];

        return view('carModels/new', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $carModel= new CarModel();

        $carModel->nume = $request->nume;
        $carModel->producer_id = $request->producer_id;
        $carModel->save();

        return Redirect::to('/carModels');
    }

    /**
     * Display the specified resource.
     */
    public function show(CarModel $carModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarModel $carModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarModel $carModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $carModel = CarModel::where('id', '=', $id)->delete();

        return Redirect::to('/carModels');
    }
}
