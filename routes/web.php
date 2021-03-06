<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*RENDERIZACION DE PARTES*/ 
Route::get('/','indexController@home');
Route::get('/sobre-nosotros','indexController@about');
Route::get('/servicios','indexController@services');
Route::get('/proyectos', 'indexController@proyects');
Route::get('/contacto','indexController@contact');
/*FIN DE RENDERIZADO */


/*PERSONALIZADAS*/
Route::get('/admin', function (Request $request) {
    return view('partials.admin')->with('title', 'Administración');
})->middleware(['auth']);

Route::get('/compra', 'PayController@index')->name('compra')->middleware('signed');
Route::post('/realizar-venta', 'PayController@store')->name('store.venta');
Route::get('/prueba', function (Request $request) {
    return view('partials.signed');
});

Route::get('/terminosycondiciones', function (Request $request) {
    return view('partials.terminos')->with('title', 'Términos Legales');
})->name('terminosycondiciones');

Route::post('/generate-bypass', 'PayController@createSignedRoute')->name('generateBypass');
/*PERFIL Y OPINIONES */
Route::get('/perfil/{id}', 'OpinionController@profile');
Route::get('/opinion/edit/{id}', 'OpinionController@showUpd');
Route::post('/opinion/add', 'OpinionController@store');
Route::delete('/opinion/delete/{id}', 'OpinionController@destroy');
Route::put('/opinion/update/{id}', 'OpinionController@update');
/*FIN PERFIL Y OPINIONES */

/*RUTA DE CONTACTO */
Route::post('/contacto/add', 'ContactoController@store');
Route::delete('/contacto/delete/{id}', 'ContactoController@destroy');
/*FIN DE LA RUTA DE CONTACTO */


Route::resource('/proyectos', 'ProyectoController')->only([
    'index', 'store', 'update', 'detachPhoto', 'destroy', 'show'
]);

Route::post('/proyectos/{id}', 'ProyectoController@detachPhoto');

/*RUTAS DE LOGIN */
Auth::routes();

Route::get('/inicio', 'HomeController@index')->name('inicio');
/*FIN DE LA RUTAS DE LOGIN */

Route::get('/politicas', function () {
    return view('partials.politicas')->with('title', 'Políticas de Privacidad');
})->name('politicas');