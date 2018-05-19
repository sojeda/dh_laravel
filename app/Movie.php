<?php

namespace App;

use App\Actor;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = [];

   	public function actors()
   	{
   		return $this->belongsToMany('App\Actor', 'actor_movie', 'movie_id', 'actor_id');
   	}
}