<?php
namespace App\Http\Controllers\PaginasController;

use App\Http\Controllers\PaginasController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function()
// {
// return view('home', array('nombre' => 'Pedro'));
// });


    // Route::get('/', function () {
    // return view('welcome');
   
    // });
    
    Route::get('/pag1',function() {
        return('Hola Mundo');
    });

    Route::get('/pag1',PaginasController::class);
    
    // Route::get('pagina2/{id}',function($id){
    //     return 'Usuario '.$id;
        
    // });


    // Route::get('pagina3/{id?}',function($id=null){
    //     return 'Usuario '.$id;
    //     ? = puedes rellenar el id o no, el id nulo
    // });