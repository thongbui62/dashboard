<?php

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
    return view('welcome');
});
Route::get('login','LoginController@login')->name('get_login');
Route::post('login','LoginController@post_login')->name('post_login');
Route::get('logout','LoginController@logout')->name('logout');
Route::group(['prefix' => 'admin','middleware'=>'LoginMiddleware'], function() {
	Route::get('ht97_admin',function(){
		if(Auth::check())
			{
				return view('dashboard.dash');
			}
		else
		{
			return redirect()->route('get_login');
		}
		
	})->name('dashboard');
    Route::group(['prefix' => 'form'], function() {
        Route::get('add_form','formController@get_add_form')->name('get_add_form');
        Route::post('add_form','formController@post_add_form')->name('add_form');
        Route::get('add_element_form','formController@get_add_element_form')->name('get_add_element');
        Route::post('add_element_form','formController@post_add_element_form')->name('post_add_element');
        Route::get('list_form','formController@get_list_form')->name('get_list_form');
        Route::get('delete_form/{id?}','formController@delete_form')->where(['id'=>'[0-9]+'])->name('delete_form');
        Route::get('edit_form/{id?}','formController@get_edit_form')->where(['id'=>'[0-9]+'])->name('get_edit_form');
        Route::post('edit_form/{id?}','formController@post_edit_form')->where(['id'=>'[0-9]+'])->name('post_edit_form');
        Route::get('select_form/{id?}','formController@get_select_form')->where(['id'=>'[0-9]+'])->name('get_select_form');
    });
    Route::group(['prefix' => 'user'], function() {
        Route::get('add_user','UserController@get_add')->name('get_add');
        Route::post('add_user','UserController@post_add')->name('post_add');
        Route::get('list_user','UserController@list_user')->name('list_user');
        Route::get('delete_user/{id?}','UserController@delete_user')->where(['id'=>'[0-9]+'])->name('delete_user');
        Route::get('edit_user/{id?}','UserController@get_edit_user')->where(['id'=>'[0-9]+'])->name('get_edit_user');
        Route::post('edit_user/{id?}','UserController@post_edit_user')->where(['id'=>'[0-9]+'])->name('post_edit_user');
    });
    
});
