<?php
use App\Http\Controllers\zoologicoController;
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


Route::get('/', function () {
    return view('welcome');
});

Route::controller(zoologicoController::class)->group(function () {

    Route::get('/zoologico', 'principal');

    Route::get('/zoologico/raton', 'raton');

    Route::get('/zoologico/chivo', 'chivo');

    Route::get('/zoologico/perro', 'perro');

});


// Route::get('cursos/{cursos}/{categoria?}', function($curso,$categoria=null){
//     if($categoria){
//     return "Bienvenido al curso $curso, de la categoria $categoria";
// }else{
//     return "Bienvenido a la página cursos: $curso";
// }
// });
