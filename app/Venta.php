<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre', 
        'email', 
        'telefono', 
        'total', 
        'is_fiscal'
    ];
}
