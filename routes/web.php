





<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace'=>'App\Http\Controllers'],function(){
    
    Route::get('/','FrontEndController@Search')->name('search');



    
        
    


        Route::get('instock','FrontendController@Instock')->name('instock');
        Route::get('issuedlaptop','FrontendController@issuedlaptop')->name('issued');
        Route:get('/about')->name('laptop.issued');
        Route::post('/issued/move/{id}', [FronendController::class, 'moveToSubmitted'])->name('issued.movr');


});




