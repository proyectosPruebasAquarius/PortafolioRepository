<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    //
    protected $table = 'proyectos';
    protected $primaryKey = 'id';

    protected $fillable = ['nombre', 'url', 'descripcion', 'imagen', 'visible', 'title_img'];
    
}
