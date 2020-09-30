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
    return view('home');
});

Route::get('form.order', function(){
    return view('formOrder');
})->name('formOrder');

Route::post('orderSubmit', 'customerController@orderSubmit')->name('orderSubmit');

Route::get('skill_submit',function (){
    return view('Legal_status');
})->name('skill_submit');

        Route::match(['get','post'] ,'skill_submit/Physical_face', 'doerController@formPhysical_face');
        Route::match(['get','post'],'skill_submit/Individual_businessman', 'doerController@formIndividual_businessman');
		Route::match(['get','post'],'skill_submit/Legal_face', 'doerController@formLegal_face');
