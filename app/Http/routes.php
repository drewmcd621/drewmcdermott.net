<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* Static route section */
	
	//Index
    Route::get('/', function()
    {
        return View::make('home');
    });
	
	/* Code */
	
	Route::get('/code', function()
    {
        return View::make('code.index');
    });
	
		
	/* Gallery */
	Route::resource('gallery','GalleryController');
	



