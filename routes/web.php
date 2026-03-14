<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index']);

//  Route::get('/posts',[PostController::class,'index'])->name('post.index');
//  Route::get('/posts/create',[PostController::class,'create'])->name('post.create');
//  Route::post('/posts',[PostController::class,'store'])->name('post.store');
//  Route::get('/posts/{post}',[PostController::class,'show'])->name('post.show');
//  Route::get('/posts/{post}/edit',[PostController::class,'edit'])->name('post.edit');
//  Route::patch('/posts/{post}',[PostController::class,'update'])->name('post.update');
//  Route::delete('/posts/{post}',[PostController::class,'destroy'])->name('post.destroy');

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
Route::resource('articulos',PostController::class)
   ->parameters(['articulos'=>'posts'])
   ->names('posts');
