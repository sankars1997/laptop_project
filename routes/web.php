<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace'=>'App\Http\Controllers'],function(){
    Route::get('/', function () {
        return view('welcome');
    });


    
        Route::get('instock','FrontEndController@Homepage')->name('home');
    
    


    Route::get('/issuedlaptop', function () {
        return view('instock');
    });
    


});






