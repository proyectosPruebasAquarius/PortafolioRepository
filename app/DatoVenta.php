<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatoVenta extends Model
{
    protected $table = 'datos_ventas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'imagen', 
        'id_transferencia', 
        'id_venta',
    ];

    public $timestamps = false;

}
