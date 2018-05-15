<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
	protected $guarded = [];

    public function getNombreCompleto()
    {
    	return $this->first_name . ' ' . $this->last_name;
    }
}


Actor::create([
	'fist_name' => $request->input('first_name'),
	'last_name' => $request->input('last_name'),
	'rating' => $request->input('rating'),
]);

$actor = Actor::find(1);

$actor->first_name = 'Hola';
$actor->last_name = 'Hola';
$actor->rating = 'Hola';
$actor->save();


$actor->delete();
