<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ModelosController extends Controller
{
    // Request à API para listagem dos modelos
    function index() 
        {
            $collection= http::get("https://driver.jmvalente.pt/index.php/general/carbrand/listmodels");
            return view('modelos',['collection'=>$collection['results']]);
        }
}
