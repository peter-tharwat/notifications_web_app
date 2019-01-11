<?php
 



 Route::middleware(['RINA'])->group(function () {
  

 

Route::get('/client','ClientController@index');
Route::get('/client/create','ClientController@create');
Route::get('/client/{id}/edit','ClientController@edit');
Route::get('/client/show/{id}','ClientController@show');
Route::get('/client/search{search?}','ClientController@search')->where('search', '.*');
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



Route::get('/track/{id?}', function ($id=NULL) {
		$client= \App\Client::where('rand_num',$id)->get()->first();
		$deal = \App\Deal::where('client_id',$client['id'])->get();
		if(is_object($deal)&& count($deal)>0)
		{


			$total_borrow_payback = array(
				'RS' =>0 ,
				'RO' =>0 ,
				'YER' =>0 ,
				'USD' =>0 ,
				 ); 

			$name=$client['name'];
			$phone=$client['phone'];
			$email=$client['email'];

			for($i=0;$i<count($deal);$i++)
			{
				if($deal[$i]->deal_borrow_payback=='borrow')
				{
					if($deal[$i]->deal_currency=='RS')
						$total_borrow_payback['RS']+=$deal[$i]->deal_mount;
					else if($deal[$i]->deal_currency=='RO')
						$total_borrow_payback['RO']+=$deal[$i]->deal_mount;
					else if($deal[$i]->deal_currency=='YER')
						$total_borrow_payback['YER']+=$deal[$i]->deal_mount;
					else if($deal[$i]->deal_currency=='USD')
						$total_borrow_payback['USD']+=$deal[$i]->deal_mount;


				}
				else
				{
					if($deal[$i]->deal_currency=='RS')
						$total_borrow_payback['RS']-=$deal[$i]->deal_mount;
					else if($deal[$i]->deal_currency=='RO')
						$total_borrow_payback['RO']-=$deal[$i]->deal_mount;
					else if($deal[$i]->deal_currency=='YER')
						$total_borrow_payback['YER']-=$deal[$i]->deal_mount;
					else if($deal[$i]->deal_currency=='USD')
						$total_borrow_payback['USD']-=$deal[$i]->deal_mount;
				}

			}

			$arrayName = array('deal' =>  $deal,'total_borrow_payback'=>$total_borrow_payback,'name'=>$name,'phone'=>$phone,'email'=>$email);
			return view('client.frontendclient',$arrayName) ;
		}
		else
		{
			return 'لم يتم العثور علي معاملات';
		}
	})->name('track');



 

/*
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/