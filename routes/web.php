<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

//los grupos de rutas son recomendables cuando crear rutas que no sean pertenecientes a un crud
Route::prefix('posts')->name('post.')->controller(PostController::class)->group(function(){
   Route::get('/','index')->name('index');
   Route::get('/create','create')->name('create');
   Route::post('store')->name('store');
   Route::get('/{post}','show')->name('show');
   Route::get('/{post}/edit','edit')->name('edit');
   Route::patch('/{post}','update')->name('update');
   Route::delete('/{post}','destroy')->name('destroy');
});

//Para crear las 7 rutas necesarias para un crud se puede utilizar route::resource, esto crea todas las rutas
//se le para dos parametros, el nombre de la uri y el controlador asociado
//Route::resource('posts',PostController::class);

//si se trabaja con una api solo se necesitan 5 rutas , no son necesarias la ruta create y la ruta edit
//Route::resource('posts',PostController::class)->except('create','edit');

//Otra forma de definir rutas para una api con las 5 rutas , es posible utilizar Route::apiresource
//Route::apiresource('posts',PostController::class);

//Si crear un apiresource pero solo necesitas 1 rutas puedes usar Route::apiresource y al fina only
//Route::apiresource('posts',PostController::class)->only('index');

//Es posible renombrar la uri sin perder los datos originales nombrado todas las rutas
//al ejecutar php artisan r:l se mostraran las rutas con la uri articlos pero los nombres de las rutas seguiran manteniendo el nombre de posts
// Route::resource('articulos',PostController::class)
//    ->parameters(['articulos'=>'posts'])
//    ->names('posts');
