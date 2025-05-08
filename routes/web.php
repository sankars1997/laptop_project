
<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace'=>'App\Http\Controllers'],function(){
    
    Route::get('/','FrontendController@Search')->name('welcome');



    
        
    


        Route::get('instock','FrontendController@Instock')->name('instock');
        Route::get('issuedlaptop','FrontendController@Issuedlaptop')->name('laptop.issued');
       
        Route::get('issued/{Serial_no}', 'FrontendController@issued')->name('issued');

        Route::get('submitted/{Serial_no}', 'FrontendController@submitted')->name('submitted');
        Route::get('movetoissudes','FrontendController@movetoissudes')->name('movetoissudes');
        Route::get('movetosubmitteds','FrontendController@movetosubmitteds')->name('movetosubmitteds');
        Route::get('create','FrontendController@create')->name('create');
        Route::get('save','FrontendController@save')->name('save');
});




