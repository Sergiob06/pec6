<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

 
/***LISTADO DE POSTS ***/
/*Route::get('/posts', function(){
    return 'Listado de posts';
})->name('posts');
*/

/***FICHA POST ***/ 
/*Route::get('/posts/{id}', function($id){
    return 'Fitxa del post'. $id;
})->where('id', "[0-9]+")
->name('postficha');
*/

/*VISTAS*/

/***VISTA LISTADO POST ***/ 
/*Route::get('/listado', function(){
    return view('posts.listado');
}); */

/***VISTA FICHA POST ***/ 
/*Route::get('/ficha', function(){
    return view('posts.ficha');
});*/

Route::get('/test', function () {
    return view('test');
});


/*POSTCONTROLLER */

Route::get('posts/nuevoPrueba', [PostController::class, 'nuevoPrueba']);
Route::get('posts/editarPrueba/{id}', [PostController::class, 'editarPrueba']);

Route::resource('posts', PostController::class);

Route::get('login', [LoginController::class, 'loginForm'])
    ->name('login');

Route::post('login', [LoginController::class, 'login']);

Route::get('logout', [LoginController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');




