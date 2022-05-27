<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sell;

class SellsController extends Controller
{
    
    public function index() {
        $sell =  Sell::all();

        return response()->json($sell, 200);
    }
    public function store(Request $request) {
        $sell = $request->all();

        Sell::create($sell);

        return response()->json(["res" => true, "message" => "Venta registrada correctamente"], 200);
    }
}
