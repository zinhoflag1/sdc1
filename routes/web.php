<?php

use App\User;

use Illuminate\Support\Facades\Auth;
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
    return view('index');
});



Auth::routes();

/* CEDEC  */
Route::middleware('cedec')->group(function (){

        Route::get('/home', function(){
            return view('cedec.cedec');      
        });

    

        Route::prefix('cedec')->group(function () {   

            Route::get('/', function(){
                return view('cedec.cedec');      
            });

            Route::get('cliente', 'ClientController@index')->name('cliente');

            Route::namespace('cedec')->group(function () {
                Route::get('compdec', 'CompdecController@index')->name('compdec');
            });

            

            //Route::post('cliente/post', 'ClientController@store');

        
    });
});


Route::middleware('compdec')->group(function (){
    
    Route::get('/home', function(){
        return view('compdec.compdec');      
    });
    Route::prefix('compdec')->group(function () {   
        Route::get('/', function(){
            return view('compdec.compdec');      
        });
    });
});





