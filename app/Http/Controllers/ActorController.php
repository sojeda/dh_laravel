<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function directory()
    {
    	$actores = Actor::all();
    	
    	return view('actores', compact('actores'));
    }

    public function show($id)
    {
    	$actor = Actor::find($id);
    	
    	return view('actor')->with('actor', $actor);
    }

    public function search(Request $request)
    {                
        $nombre = $request->input('actores');

        if ($nombre) {
            $actores = Actor::where('first_name', $nombre)->get();
        }        

        return view('actores', compact('actores'));
    }
}
