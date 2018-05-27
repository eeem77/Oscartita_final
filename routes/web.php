<?php

use Course\Mail\Contact;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', 'FrontEndController@index');

Route::get('contacto', function(){
	Mail::to('escobarmernestoe@gmail.com', 'Ernesto Escobar')
		->send(new Contact());

	return back();
});
