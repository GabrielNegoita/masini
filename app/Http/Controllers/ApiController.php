<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\Contact;
use App\Models\City;
use App\Models\County;
use Illuminate\Http\Request;

class ApiController extends Controller
{


    public function getCars(){
        $cars = Car::with('producer')->with('carModel')->with('fuel')->with('traction')->with('transmision')->with('color')->with('location')->with('location.city')->with('location.county')->get();
        return json_encode($cars);
    }

    public function getCar($id){
        $cars = Car::with('producer')->with('carModel')->with('fuel')->with('traction')->with('transmision')->with('color')->with('location')->with('location.city')->with('location.county')->find($id);
        return json_encode($cars);
    }

    public function getCounties(){
        $counties = County::all();
        return json_encode($counties);
    }

    public function getCities($id){
        $cities = City::where('county_id', '=', $id)->get();
        return json_encode($cities);
    }

   public function sendContact(Request $request){
        $contact = new Contact();
        $contact->nume = $request->nume;
        $contact->mesaj = $request->mesaj;
        $contact->save();
   }

   public function sendOrder(Request $request){
        
   }




}
