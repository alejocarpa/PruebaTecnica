<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auntenticacion extends Model
{
	protected $guarded = ["usuario","clave"];
}
