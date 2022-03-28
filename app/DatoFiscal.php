<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatoFiscal extends Model
{
    protected $table = 'datos_fiscales';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nit', 
        'nrc', 
        'giro',
        'id_venta',
    ];

    public $timestamps = false;
}
