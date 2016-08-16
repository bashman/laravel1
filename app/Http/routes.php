<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
Route::get('controlador/{id}', 'PruebaController@index');


/*Route::get('prueba', function(){
        return "Ola k ase, esta es una ruta";
});

Route::get('nombre/{nombre}', function($nombre){

    return 'Mi Nombre es: '. $nombre;
});



Route::get('username/{id}', function (int $id) {

      return isset($id) ?   "EL ID ES {$id}" : 'NO ES NUMerico';

});

Route::get('usuario/{nombre}/id/{id?}', function (string $nombre, int $id = null) {
    if (!$id) {
        return 'Metio el nombre pero no le ID .';
    } else {
        return "Nombre: {$nombre} , id:  {$id}";
    }
});

Route::get('edad/{edad?}', function(int $edad = 20){
    return $edad;
} );

Route::get('username/{name}', function(string $name){

})->where('name', '[a-z]+');
*/



Route::get('/', function () {
    $people = [];
    return view('welcome', compact('people'));
});

Route::resource('movie', 'MovieController');

