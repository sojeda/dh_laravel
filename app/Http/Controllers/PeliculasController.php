<?php

namespace App\Http\Controllers;

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
        return view('peliculas')->with('movies', $this->peliculas);
    }

    public function create()
    {
        # RETORNAR LA VISTA (EL FORMULARIO)
    }

    public function store(Request $request)
    {
        # 1 - VALIDACIONES
        $this->validate($request, [
            // REGLAS DE VALIDACION
        ]);

        # 2 - LOGICA DE NEGOCIO PARA GUARDAR
        
        # 3 - RETORNO LA RESPUESTA
        
        redirect()->route('alias.route');
        
    
}
