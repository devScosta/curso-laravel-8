<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Teste02Controller extends Controller
{
    public function index()
    {
        $frutas = ['Uva', 'Pera', 'Banan'];

        return $frutas;
    }
}
