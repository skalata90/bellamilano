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

Route::post('contact', function(\App\Http\Requests\ContactFormRequest $request){

	$data = \Request::all();

	Mail::send('testEmail', $data, function($message) use ($data){

		$message->to('skalata90@gmail.com')->from($data['email'])->subject('Bella Milano contact request');
	});

	return redirect('contact')->with("message_success","Thanks! We get back to you shortly");
});

Route::post('booking', function(\App\Http\Requests\BookingFormRequest $request){

	$data = \Request::all();

	Mail::send('bookingEmail', $data, function($message) use ($data){

		$message->to('skalata90@gmail.com')->from($data['email'])->subject('Bella Milano Booking Request');
	});

	return redirect('booking')->with("message_success","Thanks! We get back to you shortly");
});

Route::get('index', "PagesController@showHome");
Route::get('contact',"PagesController@showContact");
Route::get('booking', "PagesController@showBooking");
Route::get('admin', "PagesController@showAdmin");

Route::resource('users', 'UsersController');

Route::resource('reviews', 'ReviewsController');

Route::resource('menus', 'MenusController');

Route::get('login',"LoginController@showLoginForm");
Route::post('login',"LoginController@processLogin");
Route::get('logout',"LoginController@logout");

