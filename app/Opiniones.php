<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opiniones extends Model
{
   protected $table ='opiniones';
   protected $primaryKey = 'id';
    protected $fillable = [
        'id_usuario ', 'titulo', 'descripcion','puntuacion',
    ];
}
