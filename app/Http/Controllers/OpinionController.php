<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Opiniones;
use App\User;

class OpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $opinion = new Opiniones;
        $opinion->id_usuario = $request->id_usuario;
        $opinion->titulo = $request->titulo;
        $opinion->descripcion = $request->descripcion;
        $opinion->puntuacion = $request->puntuacion;
        $opinion->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showUpd($id)
    {
        $id_decrtyt = Crypt::decrypt($id);
        $title = "Portafolio Empresa | Editar Opinion";
        $user = User::join('opiniones','users.id','=','opiniones.id_usuario')
        ->select('opiniones.id as id_opinion','opiniones.titulo','opiniones.descripcion','opiniones.puntuacion','users.id as user_id')->where('opiniones.id','=',$id_decrtyt)->get();
        return View::make('partials.edit-opinion')->with('data',$user)->with('title',$title);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id_decrtyt = Crypt::decrypt($id);
        Opiniones::where('id',$id_decrtyt)->update(['titulo'=>$request->titulo,
        'descripcion'=> $request->descripcion,
        'puntuacion'=>$request->puntuacion,
         ]);
         $id_encrtyt = Crypt::encrypt($request->user_id);
         return redirect('perfil/'.$id_encrtyt);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $opinion = Opiniones::find($id);
        
        $opinion->delete();
        
        return back();
    }
    public function profile($id)
    {
        $id_decrtyt = Crypt::decrypt($id);
        $title = "Portafolio Empresa | Mi Perfil";
        $user = User::join('opiniones','users.id','=','opiniones.id_usuario')
        ->select('users.name','opiniones.id as id_opinion','opiniones.titulo','opiniones.descripcion','opiniones.puntuacion','opiniones.created_at')->where('users.id','=',$id_decrtyt)->paginate(3);
        $username = User::select('users.name','users.created_at')->where('users.id','=',$id_decrtyt)->get();
        return View::make('partials.profile')->with('data',$user)->with('user',$username)->with('title',$title);
       

       
    }


}
