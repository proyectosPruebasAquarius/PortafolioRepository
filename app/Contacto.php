<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table ='contactos';
    protected $primaryKey = 'id';
     protected $fillable = [
         'nombre', 'correo', 'telefono','empresa','mensaje'
     ];
}
