<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TripController extends Controller
{
        // Request à API para listagem das viagens
        function index() 
        {
            $collection= http::get("https://driver.jmvalente.pt/index.php/trip/listar");
            return view('trip',['collection'=>$collection['results']]);
        }
}
