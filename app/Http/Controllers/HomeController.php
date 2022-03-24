<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Opiniones;
use App\Proyecto;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = "Portafolio Empresa | Inicio";
        $embedded = Proyecto::orderBy('id', 'desc')->get(['url']);

        $allOpinions = Opiniones::join('users','opiniones.id_usuario','=','users.id')
        ->select('users.name as user','opiniones.titulo','opiniones.descripcion','opiniones.puntuacion','opiniones.created_at')->paginate(4);
        return View::make('partials.home')->with('opinions',$allOpinions)->with('title',$title)->with('embedded',$embedded);
    }
}
