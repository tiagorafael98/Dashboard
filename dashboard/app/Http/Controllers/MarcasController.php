<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MarcasController extends Controller
{
    // Request à API para listagem das marcas
    function index() 
        {
            $collection= http::get("https://driver.jmvalente.pt/index.php/general/carbrand/listbrands");
            return view('marcas',['collection'=>$collection['results']]);
        }
}
