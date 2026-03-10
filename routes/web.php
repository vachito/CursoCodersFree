<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hola desde la pagina de inicio";
    //return view('welcome');
});

// Route::get('/contacto', function(){
//    return "Hola desde la pagina de contacto"; 
// });

// Route::post('/contacto', function(){
//    return "Hola desde la pagina de contacto"; 
// });

Route::match(['get','post'],'/contacto', function(){
    return "Hola desde la pagina de contacto usando el metodo get o post";
});
