<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {

        $nome = "Tiago";
        $idade = 24;

        return view ('welcome',
        [
            'nome' => $nome,
            'idade' => $idade
        ]);
    }

    public function list() {
        return view('users.list');
    }
}
