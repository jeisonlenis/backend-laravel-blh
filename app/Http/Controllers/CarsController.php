<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    
    public function index() {
        $car =  Car::all();

        return response()->json($car, 200);
    }
    public function store(Request $request) {
        $car = $request->all();

        Car::create($car);

        return response()->json(["res" => true, "message" => "Vehiculo registrado correctamente"], 200);
    }

}
