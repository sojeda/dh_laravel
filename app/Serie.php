<?php

namespace App;

use App\Season;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public function seasons()
    {
    	return $this->hasMany(Season::class);
    }
}
