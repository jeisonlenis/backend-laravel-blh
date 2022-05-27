<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Seller;

class SellersController extends Controller
{
    
    public function index() {
        $seller =  Seller::all();

        return response()->json($seller, 200);
    }
    public function store(Request $request) {
        $seller = $request->all();

        Seller::create($seller);

        return response()->json(["res" => true, "message" => "Vendedor registrado correctamente"], 200);
    }
}
