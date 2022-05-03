<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistente extends Model
{
    //asistentes_temporal_table
    protected $table = 'asistentes_temporal_table';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre', 
        'email', 
        'telefono',
        'empresa',
    ];
    public $timestamps = false;
}
