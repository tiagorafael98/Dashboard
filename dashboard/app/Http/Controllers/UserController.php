<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    function index() 
    {
        
        
            $collection= http::get("https://driver.jmvalente.pt/index.php/user/listar?idUtil=" + i);

            return view('users',['collection'=>$collection['results']]);
        

        
    }
}
