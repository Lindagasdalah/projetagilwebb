<?php


Route::get('/', function () {
    return view('welcome');
});
/***************Gérant**************************/
Route::get('/gerant/viewgerant', function () {
    return view('gerant/viewgerant');
});
Route::get( '/gerant','HomeController@indexliste');

Route::get( '/gerant','HomeController@AddGerant');
Route::post('/gerant','HomeController@AddGerant');
/*******************Gérant***********************************/
Route::auth();
Route::get('/home', 'HomeController@index');




Route::get('/station','HomeController@AddStation');
route::post('/station','HomeController@AddStation');

Route::get('/gerant','HomeController@AddGerant');
Route::get('/produit','HomeController@Addproduit');
Route::get('/affproduit','HomeController@affproduit');
Route::get('/client','HomeController@Affclient');


