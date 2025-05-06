
<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace'=>'App\Http\Controllers'],function(){
    
    Route::get('/','FrontendController@Search')->name('welcome');



    
        
    


        Route::get('instock','FrontendController@Instock')->name('instock');
        Route::get('issuedlaptop','FrontendController@Issuedlaptop')->name('laptop.issued');
       
        Route::get('issued', 'FrontendController@issued')->name('issued');


});




