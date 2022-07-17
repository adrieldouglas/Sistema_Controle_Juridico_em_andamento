<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {

	$tit_company = 'Company Adriel Douglas';

	return view('index', [

		'tit_company' => $tit_company
	]);

});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function(){

	/* FORMULÁRIO DE LOGIN */
	Route::get('/', 'AuthController@showLoginForm')->name('login');
	Route::post('login', 'AuthController@login')->name('login.do');

	/* ROTAS PROTEGIDAS */
	Route::group(['middleware' => ['auth']], function() {

		/* ROTAS DASHBOARD */
		Route::get('home', 'AuthController@home')->name('home');

		/* ROTAS CLIENT */
		Route::get('clients', 'ClientController@index')->name('clients.index');
		Route::get('clients/create', 'ClientController@create')->name('clients.create');
		Route::post('clients/store', 'ClientController@store')->name('clients.store');


	});

	/* LOGOUT */
	Route::get('logout', 'AuthController@logout')->name('logout');
});
