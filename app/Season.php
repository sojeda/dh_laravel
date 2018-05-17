<?php

namespace App;

use App\Serie;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    public function serie()
    {
    	return $this->belongsTo(Serie::class);
    }
}
