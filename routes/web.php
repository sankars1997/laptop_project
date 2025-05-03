





<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace'=>'App\Http\Controllers'],function(){
    Route::get('/', function () {
        return view('welcome');
    });


    
        
    


        Route::get('instock','FrontendController@Instock')->name('instock');
        Route::get('issuedlaptop','FrontendController@issuedlaptop')->name('issuedlaptop');


});





