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
Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],function(){

Route::get('/',[App\Http\Controllers\Frontend\HomeController::class,'index'])->name('fronts.index');
Route::get('/aboutus',[App\Http\Controllers\Frontend\HomeController::class,'aboutus'])->name('fronts.aboutus');
Route::get('/services',[App\Http\Controllers\Frontend\HomeController::class,'services'])->name('fronts.services');
Route::get('/news&blog',[App\Http\Controllers\Frontend\HomeController::class,'news'])->name('fronts.news');
Route::get('/team',[App\Http\Controllers\Frontend\HomeController::class,'team'])->name('fronts.team');
Route::get('/clients',[App\Http\Controllers\Frontend\HomeController::class,'clients'])->name('fronts.clients');
Route::get('/politics',[App\Http\Controllers\Frontend\HomeController::class,'politics'])->name('fronts.politics');
Route::get('/questions',[App\Http\Controllers\Frontend\HomeController::class,'questions'])->name('fronts.questions');
Route::get('/contact',[App\Http\Controllers\Frontend\CommonController::class,'contact'])->name('fronts.contact');
Route::post('/contact/sava',[App\Http\Controllers\Frontend\CommonController::class,'sava'])->name('fronts.contact.sava');



});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    //main slider 
    Route::prefix('sliders')->group(function(){
        Route::get('/view','App\Http\Controllers\Dashboard\SliderController@view')->name('sliders.view');
        Route::post('/store','App\Http\Controllers\Dashboard\SliderController@store')->name('sliders.store');
        Route::get('/edit/{id}','App\Http\Controllers\Dashboard\SliderController@edit')->name('sliders.edit');
        Route::post('/update/{id}','App\Http\Controllers\Dashboard\SliderController@update')->name('sliders.update');
        Route::get('/delete/{id}','App\Http\Controllers\Dashboard\SliderController@delete')->name('sliders.delete');
    });

    // service
    Route::prefix('services')->group(function(){
        Route::get('/view','App\Http\Controllers\Dashboard\ServiceController@view')->name('services.view');
        Route::post('/store','App\Http\Controllers\Dashboard\ServiceController@store')->name('services.store');
        Route::get('/edit/{id}','App\Http\Controllers\Dashboard\ServiceController@edit')->name('services.edit');
        Route::post('/update/{id}','App\Http\Controllers\Dashboard\ServiceController@update')->name('services.update');
        Route::get('/delete/{id}','App\Http\Controllers\Dashboard\ServiceController@delete')->name('services.delete');
    });

    // questions
    Route::prefix('questions')->group(function(){
        Route::get('/view','App\Http\Controllers\Dashboard\QuestionController@view')->name('questions.view');
        Route::post('/store','App\Http\Controllers\Dashboard\QuestionController@store')->name('questions.store');
        Route::get('/edit/{id}','App\Http\Controllers\Dashboard\QuestionController@edit')->name('questions.edit');
        Route::post('/update/{id}','App\Http\Controllers\Dashboard\QuestionController@update')->name('questions.update');
        Route::get('/delete/{id}','App\Http\Controllers\Dashboard\QuestionController@delete')->name('questions.delete');
    });

    // social media
    Route::prefix('socials')->group(function(){
        Route::get('/view','App\Http\Controllers\Dashboard\SocialController@view')->name('socials.view');
        Route::post('/store','App\Http\Controllers\Dashboard\SocialController@store')->name('socials.store');
        Route::get('/edit/{id}','App\Http\Controllers\Dashboard\SocialController@edit')->name('socials.edit');
        Route::post('/update/{id}','App\Http\Controllers\Dashboard\SocialController@update')->name('socials.update');
        Route::get('/delete/{id}','App\Http\Controllers\Dashboard\SocialController@delete')->name('socials.delete');
    });

    // aboutus(mission & vision & goals & who's)
    Route::prefix('aboutus')->group(function(){
        Route::get('/view','App\Http\Controllers\Dashboard\AboutusController@view')->name('aboutus.view');
        Route::post('/store','App\Http\Controllers\Dashboard\AboutusController@store')->name('aboutus.store');
        Route::get('/edit/{id}','App\Http\Controllers\Dashboard\AboutusController@edit')->name('aboutus.edit');
        Route::post('/update/{id}','App\Http\Controllers\Dashboard\AboutusController@update')->name('aboutus.update');
        Route::get('/delete/{id}','App\Http\Controllers\Dashboard\AboutusController@delete')->name('aboutus.delete');
    });

    // counter
    Route::prefix('counters')->group(function(){
        Route::get('/view','App\Http\Controllers\Dashboard\CounterController@view')->name('counters.view');
        Route::post('/store','App\Http\Controllers\Dashboard\CounterController@store')->name('counters.store');
        Route::get('/edit/{id}','App\Http\Controllers\Dashboard\CounterController@edit')->name('counters.edit');
        Route::post('/update/{id}','App\Http\Controllers\Dashboard\CounterController@update')->name('counters.update');
        Route::get('/delete/{id}','App\Http\Controllers\Dashboard\CounterController@delete')->name('counters.delete');
    });

    // customers
    Route::prefix('customers')->group(function(){
        Route::get('/view','App\Http\Controllers\Dashboard\CustomerController@view')->name('customers.view');
        Route::post('/store','App\Http\Controllers\Dashboard\CustomerController@store')->name('customers.store');
        Route::get('/edit/{id}','App\Http\Controllers\Dashboard\CustomerController@edit')->name('customers.edit');
        Route::post('/update/{id}','App\Http\Controllers\Dashboard\CustomerController@update')->name('customers.update');
        Route::get('/delete/{id}','App\Http\Controllers\Dashboard\CustomerController@delete')->name('customers.delete');
    });

    // team
    Route::prefix('team')->group(function(){
        Route::get('/view','App\Http\Controllers\Dashboard\TeamController@view')->name('team.view');
        Route::post('/store','App\Http\Controllers\Dashboard\TeamController@store')->name('team.store');
        Route::get('/edit/{id}','App\Http\Controllers\Dashboard\TeamController@edit')->name('team.edit');
        Route::post('/update/{id}','App\Http\Controllers\Dashboard\TeamController@update')->name('team.update');
        Route::get('/delete/{id}','App\Http\Controllers\Dashboard\TeamController@delete')->name('team.delete');
    });

    //news & galery & offers 
    Route::prefix('news')->group(function(){
        Route::get('/view','App\Http\Controllers\Dashboard\NewsController@view')->name('news.view');
        Route::post('/store','App\Http\Controllers\Dashboard\NewsController@store')->name('news.store');
        Route::get('/edit/{id}','App\Http\Controllers\Dashboard\NewsController@edit')->name('news.edit');
        Route::post('/update/{id}','App\Http\Controllers\Dashboard\NewsController@update')->name('news.update');
        Route::get('/delete/{id}','App\Http\Controllers\Dashboard\NewsController@delete')->name('news.delete');
    });

    //customer opinions 
    Route::prefix('opinions')->group(function(){
        Route::get('/view','App\Http\Controllers\Dashboard\OpinionController@view')->name('opinions.view');
        Route::post('/store','App\Http\Controllers\Dashboard\OpinionController@store')->name('opinions.store');
        Route::get('/edit/{id}','App\Http\Controllers\Dashboard\OpinionController@edit')->name('opinions.edit');
        Route::post('/update/{id}','App\Http\Controllers\Dashboard\OpinionController@update')->name('opinions.update');
        Route::get('/delete/{id}','App\Http\Controllers\Dashboard\OpinionController@delete')->name('opinions.delete');
    });

    //politics 
    Route::prefix('politics')->group(function(){
        Route::get('/view','App\Http\Controllers\Dashboard\PoliticsController@view')->name('politics.view');
        Route::post('/store','App\Http\Controllers\Dashboard\PoliticsController@store')->name('politics.store');
        Route::get('/edit/{id}','App\Http\Controllers\Dashboard\PoliticsController@edit')->name('politics.edit');
        Route::post('/update/{id}','App\Http\Controllers\Dashboard\PoliticsController@update')->name('politics.update');
        Route::get('/delete/{id}','App\Http\Controllers\Dashboard\PoliticsController@delete')->name('politics.delete');
    });

    
    //messages from website
    Route::prefix('inbox')->group(function(){
        Route::get('/view','App\Http\Controllers\Dashboard\InboxController@view')->name('inbox.view');
        Route::get('/delete/{id}','App\Http\Controllers\Dashboard\InboxController@delete')->name('inbox.delete');
    });

});