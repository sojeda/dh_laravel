<?php

namespace App\Http\Controllers;

use App\Movie;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
	private $peliculas = [
		1 => "Toy Story",
		2 => "Buscando a Nemo",
		3 => "Avatar",
		4 => "Star Wars: Episodio V",
		5 => "Up",
		6 => "Mary and Max"
	];	

    public function buscarPeliculaId($id)
    {
		return array_key_exists($id, $this->peliculas) ? $this->peliculas[$id] : 'No hay';
    }

    public function buscarPeliculaNombre($nombre)
    {
    	foreach ($this->peliculas as $key => $pelicula) {
    		if (strtolower($pelicula) == strtolower($nombre)) {
    			return $pelicula;
    		}
    	}

    	return 'No hay pelicula';
    }

    public function listado()
    {
        return view('peliculas.list')->with('movies', Movie::all());
    }

    public function create()
    {
        return view('agregarPelicula');
    }

    public function store(Request $request)
    {        
        # 1 - VALIDACIONES
        $this->validate($request, [
            'titulo' => 'required',
            'rating' => 'required',
            'premios' => 'required',
            'duracion' =>'required',
            'dia' =>'required',
            'mes' =>'required',
            'anio' =>'required'

        ]);

        # 2 - LOGICA DE NEGOCIO PARA GUARDAR
        
        $year= $request->input('anio');
        $month= $request->input('mes');
        $day= $request->input('dia');

        dd(Carbon::createFromDate($year, $month, $day));

        $movie = Movie::create([
            'title'=> $request->input('titulo'),
            'rating'=> $request->input('rating'),
            'awards'=> $request->input('premios'),
            'length'=> $request->input('duracion'),
            'release_date'=> Carbon::createFromDate($year, $month, $day)
        ]);
        
        # 3 - RETORNO LA RESPUESTA
        
        redirect()->route('peliculas.mostrar', $movie->id);
    }        

    public function show($id)
    {
        $movie = Movie::find($id);

        if ($movie) {
            return view('peliculas.show', compact('movie'));
        }

        return 'No hay pelicula';
    }

    public function delete($id)
    {
        $movie = Movie::find($id);

        $movie->delete();

        redirect()->route('peliculas.listado')->with('message', 'Registrado Eliminado');
    }
    
}
