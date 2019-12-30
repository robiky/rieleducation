<?php

use Carbon\Carbon;

use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

Route::get('/test', function (){
   return view('test');
});


## route for category mvct
Route::get('/category/create',  ['uses'=>'CategoriesController@create','as'=>'category.create']);
Route::post('/category/store',  ['uses'=>'CategoriesController@store','as'=>'category.store']);


## route for exam registration
Route::get('/exam/register',  ['uses'=>'ExamsController@create','as'=>'exam.create']);
Route::post('/exam/store',  ['uses'=>'ExamsController@store','as'=>'exam.store']);


Auth::routes();

## controller for my frontend display
Route::get('/',  ['uses'=>'HomeController@index','as'=>'index']);
Route::get('/event/{slug}',  ['uses'=>'HomeController@singleEvent','as'=>'events.singleEvent']);

Route::get('/exam/{slug}',  ['uses'=>'HomeController@singleExam','as'=>'exams.singleExam']);
Route::get('/about',  ['uses'=>'HomeController@about','as'=>'home.about']);
Route::get('/contact',  ['uses'=>'HomeController@contact','as'=>'home.contact']);
Route::post('/store/contact',  ['uses'=>'HomeController@storeContact','as'=>'home.storeContact']);
Route::get('/shop',  ['uses'=>'ProductController@index','as'=>'product.shop']);


## route for my events mvc
Route::get('/events',  ['uses'=>'EventsController@index','as'=>'events.index']);
Route::get('/events/create',  ['uses'=>'EventsController@create','as'=>'events.create']);
Route::post('/events/store',  ['uses'=>'EventsController@store','as'=>'events.store']);
Route::get('/events/{id}/show',  ['uses'=>'EventsController@show','as'=>'events.show']);


##route for my timetable mvc
Route::get('/timetable/create',  ['uses'=>'TimetableController@create','as'=>'timetable.create']);
Route::post('/timetable/store',  ['uses'=>'TimetableController@store','as'=>'timetable.store']);




##route for singleexams store
Route::get('/inter/create',  ['uses'=>'SingleExamsController@create','as'=>'inter.create']);
Route::post('/inter/store',  ['uses'=>'SingleExamsController@store','as'=>'inter.store']);

##route for single store product
Route::resource('bookstore','productController');



##route for single store product
Route::post('/contact/message',  ['uses'=>'ContactController@store','as'=>'contact.store']);
Route::get('/store/{slug}', [
    'uses'=>'ProductController@singleProduct',
    'as'=>'product.single'
]);





##route for the rave payment
//
//Route::post('/pay', 'RaveController@initialize')->name('pay');
//Route::post('/rave/callback', 'RaveController@callback')->name('callback');
//Route::post('/receivepayment', 'RaveController@webhook')->name('webhook');

Route::post('/pay', [
    'uses' => 'PaymentController@redirectToGateway',
    'as' => 'pay'
]);

Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');


Route::get('/popup', [
    'uses'=>'HomeController@popUp',
    'as'=>'popup.single'
]);

##timetable for session and exam route
Route::get('/training/session','TimetableController@trainingSession')->name('timetable.session');

Route::get('/timetable','TimetableController@timetable')->name('timetable.exam');


##training payment and store details
Route::post('/training/store',  ['uses'=>'TrainingController@store','as'=>'trainings.store']);
