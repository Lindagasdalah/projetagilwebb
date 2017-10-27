<?php


Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/gerant/viewgerant', function () {
    return view('gerant/viewgerant');
});

Route::get( '/gerant','HomeController@AddGerant');
Route::post('/gerant','HomeController@AddGerant');

//Route::get('/station', /** @lang text */
   // 'HomeController@AddStation');
/*route::post('/station','HomeController@AddStation');

Route::get('/gerant','HomeController@AddGerant');
Route::get('/produit','HomeController@Addproduit');
Route::get('/affproduit','HomeController@affproduit');
Route::get('/client','HomeController@Affclient');*/


