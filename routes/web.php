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

$router->get('/version', function () use ($router) {

    return $route->app->version();
});

$router->get('/saludo/{nombre}', function($nombre) {
    return 'Hola mi nombre es '. $nombre;
});

$router->get('/calcular/{edad}', function($edad) {
    if($edad>0 && $edad <18)
        return 'eres menor de edad '. $edad;
    } elseif ($edad >= 18 && $edad <= 100) {
         return 'eres mayor de edad':
    } else {
    return 'edad erronea' ;
    }
});

$router->post('/saludo', function () {
    return 'SE CREO UN DATO ';
});
