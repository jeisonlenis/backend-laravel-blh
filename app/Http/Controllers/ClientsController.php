<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
{
    
    public function index() {
        $client =  Client::all();

        return response()->json($client, 200);
    }
    public function store(Request $request) {
        $client = $request->all();

        Client::create($client);

        return response()->json(["res" => true, "message" => "Cliente registrado correctamente"], 200);
    }
}
