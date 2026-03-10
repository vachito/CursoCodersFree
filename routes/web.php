<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hola desde la pagina de inicio";
    //return view('welcome');
});

Route::get('/contacto', function(){
   return "Hola desde la pagina de contacto"; 
});

Route::get('/cursos/informacion', function(){
   return "Aqui podras encontrar toda la informacion de los cursos"; 
});

//ruta con expresion regular para recibir un parametro unicamente numerico
Route::get('/cursos/{id}', function($id){
    return "Bienvenido al curso: $id";
});

//ruta con expresion regular para recibir un parametro unicamente numerico
// Route::get('/cursos/{curso}', function($curso){
//     return "Bienvenido al curso: $curso";
// })->whereIn('curso',['laravel','php','vue']);

//ruta con expresion regular para recibir mas de un parametro
// Route::get('/cursos/{curso}/{categoria}', function($curso,$categoria){
//     return "Bienvenido al curso: $curso de la categoria $categoria";
// })->where([
//         'curso' => '[A-Za-z]+',
//         'categoria' => '[A-Za-z]+'
//     ]);

//ruta con expresion regular para recibir un parametro unicamente numerico
// Route::get('/cursos/{curso}', function($curso){
//     return "Bienvenido al curso: $curso";
// })->where('curso','[0-9]+');

//ruta con expresion regular para recibir un parametro unicamente numerico
// Route::get('/cursos/{curso}', function($curso){
//     return "Bienvenido al curso: $curso";
// })->whereAlpha('curso');

//ruta con expresion regular para recibir un parametro unicamente numerico
// Route::get('/cursos/{curso}', function($curso){
//     return "Bienvenido al curso: $curso";
// })->whereAlphaNumeric('curso');

//ruta con expresion regular para recibir un parametro unicamente alfabetico
// Route::get('/cursos/{curso}', function($curso){
//     return "Bienvenido al curso: $curso";
// })->where('curso','[A-Za-z]+');