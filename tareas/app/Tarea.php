<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $guarded = ["fechacreacion","descripcion","estado","fechalimite","idusuario"];
}
