<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource("tareas","TareaController");
Route::post(uri: '/tareas/consultar', action: 'TareaController@show');
Route::post(uri: '/tareas/crear', action: 'TareaController@store');
Route::post(uri: 'autenticacion', action: 'AuntenticacionController@show');
Route::post(uri: '/tareas/actualizar', action: 'TareaController@update');
Route::post(uri: '/tareas/borrar', action: 'TareaController@destroy');
