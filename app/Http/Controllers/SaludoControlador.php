<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoControlador extends Controller
{
    public function index($saludo =  null)
    {
    	return view('saludo.saludo');
    }
}
