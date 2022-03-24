<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Opiniones;
use App\Contacto;
use App\Proyecto;


class indexController extends Controller
{
    public function home()
    {

        $title = "Aquarius IT SV | Inicio";
        $embedded = Proyecto::orderBy('id', 'desc')->get(['url']);
        $allOpinions = Opiniones::join('users','opiniones.id_usuario','=','users.id')
        ->select('users.name as user','opiniones.titulo','opiniones.descripcion','opiniones.puntuacion','opiniones.created_at')->paginate(3);
        return View::make('partials.home')->with('opinions',$allOpinions)->with('title',$title)->with('embedded',$embedded);

    }
    public function about()
    {
        $title = "Aquarius IT SV | Sobre Nosotros";
        return View::make('partials.about')->with('title',$title);
    }
    
    public function proyects()
    {
        $title = "Aquarius IT SV | Proyectos";
        return View::make('partials.proyects')->with('title',$title);
    }

    public function services()
    {
        $title = "Aquarius IT SV | Servicios";
        return View::make('partials.services')->with('title',$title);
    }

    public function contact()
    {
        $title = "Aquarius IT SV | Contacto";
        $contacto = Contacto::select('id','nombre','correo','telefono','interes','tipo_persona','mensaje','created_at')->paginate(5);
        return View::make('partials.contact')->with('contactos',$contacto)->with('title',$title);
    }


}
