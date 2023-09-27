<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Producer;
use App\Models\Fuel;
use App\Models\Traction;
use App\Models\Transmision;
use App\Models\Color;
use App\Models\Location;
use App\Models\County;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
  
        $data = [
            'cars' => $cars
        ];

        return view('cars/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $producers = Producer::all();
        $fuels = Fuel::all();
        $tractions= Traction::all();
        $transmisions = Transmision::all();
        $colors = Color::all();
        $locations = Location::all();
        
        $data = [
            'producers' => $producers,
            'fuels' => $fuels,
            'tractions' => $tractions,
            'transmisions' => $transmisions,
            'colors' => $colors,
            'locations' => $locations
        ];
        return view('cars/new', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fileName = time().'.'.$request->imagine->extension();  
        $request->imagine->move(public_path('uploads'), $fileName);
        
        $newCar = new Car();
        $newCar->pret = $request->pret;
        $newCar->nr_km = $request->nr_km;
        $newCar->capacitate_cilindrica = $request->cap_cil;
        $newCar->serie_sasiu = $request->serie_sasiu;
        $newCar->producer_id = $request->producer_id;
        $newCar->car_model_id = $request->car_model_id;
        $newCar->echipare = $request->echipare;
        $newCar->putere = $request->putere;
        $newCar->imagine = $fileName;
        
        $newCar->fuel_id = $request->fuel_id;    
        $newCar->traction_id = $request->traction_id;   
        $newCar->transmision_id = $request->transmision_id;    
        $newCar->color_id = $request->color_id;
        $newCar->location_id = $request->location_id;    
        
        $newCar->save();

        return Redirect::to('/cars');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $car = Car::find($id);

        $data = [
            'car' => $car
        ];
        return view('cars/singleCar', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $car = Car::find($id);
        $producers = Producer::all();
        $fuels = Fuel::all();
        $tractions= Traction::all();
        $transmisions = Transmision::all();
        $colors = Color::all();
        $locations = Location::all();
        $counties = County::all();
        
        $data = [
            'producers' => $producers,
            'fuels' => $fuels,
            'tractions' => $tractions,
            'transmisions' => $transmisions,
            'colors' => $colors,
            'locations' => $locations,
            'counties' => $counties,
            'car' => $car
        ];
       
        return view('cars/edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $car =  Car::find($id);
        $car->pret = $request->pret;
        $car->nr_km = $request->nr_km;
        $car->capacitate_cilindrica = $request->cap_cil;
        $car->serie_sasiu = $request->serie_sasiu;
        $car->producer_id = $request->producer_id;
        $car->car_model_id = $request->car_model_id;
        $car->echipare = $request->echipare;
        $car->putere = $request->putere;
        $car->imagine = $request->imagine;
        
        $car->fuel_id = $request->fuel_id;    
        $car->traction_id = $request->traction_id;   
        $car->transmision_id = $request->transmision_id;    
        $car->color_id = $request->color_id;
        $car->location_id = $request->location_id;    
        
        $car->update();

        return Redirect::to('/cars');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $car = Car::where("id", "=", $id)->delete();

        return Redirect::to('/cars');


    }
}
