<?php

namespace App\Http\Controllers\Saludos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaludoControlador extends Controller
{
    public function loquesea()
    {
    	return 'Otro saludo';
    }
}
