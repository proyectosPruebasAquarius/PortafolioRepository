<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\{Venta, DatoVenta, DatoFiscal};

class PayController extends Controller
{
    public function index(Request $request) 
    {
        if (! $request->hasValidSignature()) {
            abort(403);
        }
     
        /* $event->users()->attach($user); */

        return view('partials.signed')->with('title', 'Checkout');
    }   
    

    public function getIndex() 
    {
        return URL::temporarySignedRoute(
            'event.subscribe', 
            now()->addMinutes(5), 
            /* ['event' => Event::first(), 'user' => auth()->user()] */
        );
    }

    public function createSignedRoute() 
    {
        $url = URL::temporarySignedRoute(
            'compra', 
            now()->addMinutes(1),
            ['pass' => 1]
        );

        return view('partials.admin')->with('url', $url)->with('title', 'Administración - URL Generada');
    }

    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'email' => 'required|email|min:3|max:200',
            'nombre' => 'required|min:3|max:200',
            'telefono' => 'required|min:8|max:12',
            'total' => 'required|numeric',
            'imagen' => 'required|image|mimes:jpeg,jpg,png',
            'id_transferencia' => 'required|min:3|max:100',
            'is_fiscal' => 'nullable|boolean',
            'nit' => 'required_with:is_fiscal',
            'nrc' => 'required_with:is_fiscal',
            'giro' => 'required_with:is_fiscal',
        ]);
        
        try {
            DB::beginTransaction();

            $venta = new Venta;
            $venta->nombre = $request->nombre;
            $venta->email = $request->email;
            $venta->telefono = $request->telefono;
            $venta->total = $request->total;
            $venta->is_fiscal = $request->is_fiscal ? 1 : 0;
            $venta->saveOrFail();

            if ($request->is_fiscal) {
                $datoFiscal = new DatoFiscal;
                $datoFiscal->nit = $request->nit;
                $datoFiscal->nrc = $request->nrc;
                $datoFiscal->giro = $request->giro;
                $datoFiscal->id_venta = $venta->id;
                $datoFiscal->saveOrFail();
            }

            $store = $request->file('imagen')->store('public/images/comprobantes');
            $urlGenerator = Storage::url($store);            
            
            $datoVenta = new DatoVenta;
            $datoVenta->imagen = json_encode($urlGenerator);
            $datoVenta->id_transferencia = $request->id_transferencia;
            $datoVenta->id_venta = $venta->id;
            $datoVenta->saveOrFail();

            DB::commit();
            return redirect()->back()->with('payState', 'Successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('payState', 'Error');

        }

        //return $validatedData;
        
    }

}
