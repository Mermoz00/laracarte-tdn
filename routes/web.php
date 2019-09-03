<?php
    use App\Mail\ContactMessageCreated;
    Route::get('/','PagesController@home')->name('root_path');
    Route::get('/about','PagesController@about')->name('about_path');
    Route::get('/contact','ContactsController@create')->name('contact_path');
    Route::post('/contact','ContactsController@store')->name('contact_path');
    Route::get('/test',function(){
        return new ContactMessageCreated;
    });