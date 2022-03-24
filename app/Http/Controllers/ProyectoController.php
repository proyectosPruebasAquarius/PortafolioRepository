<?php

namespace App\Http\Controllers;

use App\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;

class ProyectoController extends Controller
{
    private static $oldArr = array();
    private static $newArr = array();

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtiene los datos de la base de datos
        $registros = Proyecto::orderBy('id', 'asc')
        ->get();
        $title = "Portafolio Empresa | Proyectos";
        return View::make('partials.proyects', ['registros' => $registros])->with('title',$title);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Fun para almacenar los datos del proyecto;
        $proyectos = new Proyecto();
        $proyectos->nombre = $request->nombre;
        $proyectos->url = $request->url;
        $proyectos->descripcion = $request->descripcion;
        $proyectos->visible = empty($request->visible) ? 0 : $request->visible;

        if ($request->hasfile('title_img')) {
            
            $store = $request->file('title_img')->store('public/images/titles');
            $urlGenerator = Storage::url($store);
            $proyectos->title_img = json_encode($urlGenerator);
        }

        if($request->hasfile('imagen'))
         {
            $numItems = count($request->file('imagen'));
            $i = 0;
            foreach($request->file('imagen') as $image)
            {
                $path = $image->store('public/images/proyectos');
                $url = Storage::url($path);
        
                $data[] = $url;  
                if(++$i === $numItems) {
                    $proyectos->imagen =  json_encode($data);
                    $proyectos->save();
                }
            }
         }else {
            $proyectos->imagen = [];
            $proyectos->save();
         }        
        
        //notify()->success('!'.$proyectos->nombre.' guardado con éxito!');
        //drakify('success', '!'.$proyectos->nombre.' guardado con éxito!');
        return back()->with('message', 'Proyecto insertado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Return view with the specified resource.
        $proyecto = Proyecto::findOrFail(Crypt::decrypt($id));
        $title = "Portafolio Empresa | Proyecto";
        return view('partials.show-proyect', ['resource' => $proyecto])->with('title',$title);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyecto $proyecto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Fun actualiza el registros
        $proyectos = Proyecto::findOrFail($id);
        $proyectos->nombre = empty($request->nombre) ? $proyectos->nombre : $request->nombre;
        $proyectos->url = empty($request->url) ? $proyectos->url : $request->url;
        $proyectos->descripcion =  empty($request->descripcion) ? $proyectos->descripcion : $request->descripcion;
        $proyectos->visible = empty($request->visible) ? 0 : $request->visible;
        $path = $request->file('imagen');
        /* $petUpdate = empty($path) ? $proyectos->imagen : $path->store('public/images/proyectos');
        $url = Storage::url($petUpdate);
        $proyectos->imagen = empty($path) ? $proyectos->imagen : $url; */
        if ($request->hasfile('imagen')) {
            # code...
            if ($request->session()->exists('newArr')) {
                # code...
                $numItems = count($request->file('imagen'));
                $i = 0;
                $array = session('newArr');
                $arr = array();
                $countObj = count($array);
                $iObj = 0;
                foreach ($array as $value) {
                    # code...
                    $arr[] = $value;

                    if(++$iObj === $countObj) {
                        foreach($request->file('imagen') as $image)
                        {
                            $path = $image->store('public/images/proyectos');
                            $url = Storage::url($path);
                    
                            
                            $arr[] = $url;  
                            if(++$i === $numItems) {
                                $proyectos->imagen =  json_encode($arr);
                                $proyectos->update();
                                session(['success_register' => json_encode($arr)]);
                            }
                        }
                    }
                }                
            } else {
                $numItems = count($request->file('imagen'));
                $i = 0;
                foreach($request->file('imagen') as $image)
                {
                    $path = $image->store('public/images/proyectos');
                    $url = Storage::url($path);
            
                    $data[] = $url;  
                    if(++$i === $numItems) {
                        $merge = array_merge(json_decode($proyectos->imagen), $data);
                        $proyectos->imagen =  json_encode($merge);
                        $proyectos->update();
                        session(['success_register' => 'value']);
                    }
                }
            }            
            /* Storage::delete(public_path($url)); */
        } else {
            
            if ($request->session()->exists('newArr')) {
                # code...
                $proyectos->imagen = session('newArr');
                $proyectos->update();
            } else {
                $proyectos->imagen = $proyectos->imagen;
                $proyectos->update();
                
            }            
            
        }
        
        //smilify('success', '!'.$proyectos->nombre.' Actualizado con éxito!');
        // Forget a single key...
        $request->session()->forget('newArr');
        return back()->with('message', 'Proyecto insertado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $proyecto = Proyecto::findOrFail($id)->delete();
        return back()->with('message','Operation Successful !');

    }

    public function detachPhoto(Request $request, $photo_id) 
    {
        
        /* $word = $request->a;
        if ($request->session()->has('newArr')) {
            # code...
            $session = session('newArr');
            $poss = array_search($word, $session);
            unset($session[$poss]);
            session(['newArr', $session]);
            static::$newArr = $poss;
        } else {

            $proyecto = Proyecto::findOrFail($photo_id);
            $untouchedA = json_decode($proyecto->imagen);
            static::$oldArr = json_decode($proyecto->imagen);
            $pos = array_search($word, $untouchedA);
            unset($untouchedA[$pos]);
            static::$newArr = $untouchedA;
            session(['newArr' => $untouchedA]);
            
        } */
        //$request->session()->push('newArr', $untouchedA);
        if ($request->session()->exists('newArr')) {
            $request->session()->forget('newArr');
        }
        $session = $request->b;
        //$request->session()->push('newArr', $session);
        session(['newArr' => $session]);
        $data = [
            //'data' => static::$oldArr,
            'newArr' =>  session('newArr'),
            'pos' => $request->b
        ];
        return $data;

    }

    public function attachPhoto(Request $request)
    {
        $word = $request->a;
        $value = session('newArr');
        $request->session()->push('newArr', $word);
        $data = [
            'data' => static::$oldArr,
            'newArr' => $value
        ];
        return $data;
    }
}
