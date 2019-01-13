<?php
 



 Route::middleware(['RINA'])->group(function () {
  

 

Route::get('/client','ClientController@index');
Route::get('/client/create','ClientController@create');
Route::get('/client/{id}/edit','ClientController@edit');
Route::get('/client/show/{id}','ClientController@show');
Route::get('/client/search{search?}','ClientController@search')->where('search', '.*');
Route::get('/client/details/{id}','ClientController@details');
Route::POST('/client','ClientController@store');
Route::POST('/client/update/{id}','ClientController@update');
Route::POST('/client/destroy','ClientController@destroy');



Route::get('/emp','EmpController@index');
Route::get('/emp/create','EmpController@create');
Route::get('/emp/{id}/edit','EmpController@edit');
Route::get('/emp/show/{id}','EmpController@show');
Route::get('/emp/search{search?}','EmpController@search')->where('search', '.*');
Route::POST('/emp','EmpController@store');
Route::POST('/emp/update/{id}','EmpController@update');
Route::POST('/emp/destroy','EmpController@destroy');



Route::get('/deal','DealController@index');
Route::get('/deal/create','DealController@create');
Route::get('/deal/{id}/edit','DealController@edit');
Route::get('/deal/show/{id}','DealController@show');
Route::get('/deal/search{search?}','DealController@search')->where('search', '.*');

Route::POST('/deal','DealController@store');
Route::POST('/deal/update/{id}','DealController@update');
Route::POST('/deal/destroy','DealController@destroy');


/*Route::POST('/getclients','DealController@getclientsfordeal');
*/

 
Route::get('/message','MessageController@index');
Route::get('/message/show/{id}','MessageController@show');
Route::get('/message/search{search?}','MessageController@search')->where('search', '.*');
Route::get('/message/create','MessageController@create');
Route::POST('/message','MessageController@send_message');
Route::POST('/sendmessage','MessageController@send_message');
Route::POST('/message/destroy','MessageController@destroy');



 
	Route::get('/', function () {
	    return view('welcome');
	});
 


	
	Route::POST('/getClientsMsgs','MessageController@getClientsMsgs');
	Route::POST('/getEmpsMsgs','MessageController@getEmpsMsgs');
	Route::POST('/total_borrow_payback','MessageController@total_borrow_payback');



 
 

}); 




Auth::routes();

Route::get('/register', function(){
	return redirect('/login');
});
Route::POST('/register', function(){
	return redirect('/login');
});

Route::get('/schadual_run_command','NotificationController@schadual_run_command');
Route::get('/track/{id?}', 'ClientController@track')->name('track');



 

/*
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/