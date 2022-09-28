<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CarController extends Controller
{
    // Request à API para listagem dos carros
    function index() 
    {
        $collection= http::get("https://driver.jmvalente.pt/index.php/car/listar");
        return view('cars',['collection'=>$collection['results']]);
    }
}
