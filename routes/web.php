<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', HomeController::class);

//los grupos de rutas son recomendables cuando crear rutas que no sean pertenecientes a un crud
Route::prefix('posts')->name('post.')->controller(PostController::class)->group(function () {
   Route::get('/', 'index')->name('index');
   Route::get('/create', 'create')->name('create');
   Route::post('store')->name('store');
   Route::get('/{post}', 'show')->name('show');
   Route::get('/{post}/edit', 'edit')->name('edit');
   Route::patch('/{post}', 'update')->name('update');
   Route::delete('/{post}', 'destroy')->name('destroy');
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

Route::get('/prueba', function () {
   //Obtiene todos los datos de la tabla usuarios
   // return DB::table('users')
   // ->orderBy('id')
   // ->get();

   //Esta consulta secciona los datos de 100 en 100 para no saturar la memoria de php
   // Obteniendo solo el nombre de cada registro
   // return DB::table('users')
   // ->orderBy('id')
   // ->chunk(100, function ($users) {
   //    foreach($users as $user){
   //       echo $user->name.'</br>';
   //    }
   // });

   //Esta consulta secciona los datos de 100 en 100 para no saturar la memoria de php
   // Obteniendo solo el nombre de cada registro usando otra sintaxis
   // return DB::table('users')
   // ->orderBy('id')
   // ->lazy()->each(function ($user) {
   //    echo $user->name.'</br>';
   // });

   //Cuantos registros tiene una tabla
   //return DB::table('users')->count();

   //Valor maximo de un campo en una tabla
   //return DB::table('users')->max('id');

   //Valor minimo de un campo en una tabla
   //return DB::table('users')->min('id');

   //promedio de un campo en una tabla
   //return DB::table('users')->avg('id');

   //verficar si un registro existe en una tabla
   // if (DB::table('users')->where('id', 1500)->exists()) {
   //    echo "El registro existe";
   // } else {
   //    echo "El registro no existe";
   // };

   //mostrar algunos campos de una tabla
   //el metodo raw permite crear campos personalizados
   //es posible incluirlo en el select o usar la funcion selectraw
   // return DB::table('users')
   //    ->select(
   //       'id',
   //       'name',
   //       'email',
   //       DB::raw("CONCAT(name, ' ' , email) as new_name"))
   //       ->selectRaw("CONCAT(name, ' ' , email) as full_name_wid_selectraw")
   //    ->get();


   //Uso de joins para mostrar campos especificos de las ralaciones
   // return DB::table('posts as p')
   //    ->join('users as u','p.user_id','=','u.id')
   //    ->join('categories as c','p.category_id','=','c.id')
   //    ->select('p.title','p.body','p.published_at','u.name as user_name','c.name as category')
   //    ->get();

   //Uso de where con operadores relacionales
   // return DB::table('users')
   //    ->where('id','<=',10)
   //    ->get();

   //Uso de where con operador like
   // return DB::table('users')
   //    ->where('name','like','%ela%')
   //    ->get();

   //Uso de where con operador varias condiciones
   // return DB::table('users')
   //    ->where([
   //       ['id','>=',5],
   //       ['id','<=',10],
   //    ])
   //    ->get();

   //Uso de where con operador varias condiciones
   //return DB::table('users')
      // ->where('email','like','%example.org')
      // ->orWhere('email','like','%example.net')
      //->whereNot('email','like','%example.com')
      //->get();

      //Uso de where between un arreglo de limites de condiciones
   // return DB::table('users')
   //    ->whereBetween('id',[1,20])
   //    ->get();

   //Uso de where con agrupaciones logicas para aplicar mas de un filtro y condicion
   // return DB::table('users')
   //    ->whereBetween('id',[10,30])
   //    ->where(function($query){
   //       $query->where('email','like','%example.org')
   //             ->orWhere('email','like','%example.net');
   //    })
   //    ->get();

   //Uso de orderBy, el valor por defecto es asc
   //tambien se puede usar el metodo latest, oldest, y inRandomOrder
   // return DB::table('users')
      //->orderBy('id')
      //->orderBy('id','desc')
      //->latest('id')
      // ->inRandomOrder()
      //->first()
      //->get();

   /* Uso de agrupacion de registros
      consulta para contar cuantos post tiene cada usuario 
      el metodo having permite filtrar por un campo agregado que no existe en la base de datos
      para este ejemplo en campo total_post */
   // return DB::table('posts')
   //    ->select('user_id',DB::raw("COUNT(*) as total_post"))
   //    ->groupBy('user_id')
   //    ->having('total_post','>',2)
   //    ->get();

      /* Uso de agrupacion de registros
      consulta para contar cuantos post tiene cada usuario 
      el metodo having permite filtrar por un campo agregado que no existe en la base de datos
      para este ejemplo en campo total_post */
   return DB::table('posts')
      ->select('user_id',DB::raw("COUNT(*) as total_post"))
      ->groupBy('user_id')
      ->having('total_post','>',2)
      ->get();
});
