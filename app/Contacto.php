<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table ='contactos';
    protected $primaryKey = 'id';
     protected $fillable = [
         'nombre', 'correo', 'telefono','interes','tipo_persona','mensaje'
     ];
}
