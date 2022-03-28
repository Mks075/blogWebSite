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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','Frontend\FrontedController@index');

Route::get('about','Frontend\FrontedController@aboutUs')->name('about.us');

Route::get('contact','Frontend\FrontedController@contactUs')->name('contact.us');
Route::get('/post/d/{id}','Frontend\FrontedController@postNews')->name('post.news');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('users')->group(function(){
    Route::get('view','Backend\UserViewController@userview')->name('users.view');
    Route::get('add','Backend\UserViewController@userAdd')->name('users.add');
    Route::post('store','Backend\UserViewController@userStore')->name('users.store');
    Route::get('edit/{id}','Backend\UserViewController@userEdit')->name('users.edit');
    Route::post('update/{id}','Backend\UserViewController@userUpdate')->name('users.update');
    Route::get('delete/{id}','Backend\UserViewController@userDelete')->name('users.delete');
});


Route::prefix('profile')->group(function(){
    Route::get('view','Backend\profileViewController@view')->name('profile.view');
    Route::get('add','Backend\profileViewController@edit')->name('profile.edit');
    Route::post('store','Backend\profileViewController@update')->name('profile.update');
    Route::get('pass/view','Backend\profileViewController@passView')->name('profile.passView');
    Route::post('pass/update','Backend\profileViewController@passUpdate')->name('profile.passUpdate');
});
Route::prefix('logos')->group(function(){
    Route::get('view','Backend\LogoController@Lview')->name('logos.view');
    Route::get('add','Backend\LogoController@LAdd')->name('logos.add');
    Route::post('store','Backend\LogoController@LStore')->name('logos.store');
    Route::get('edit/{id}','Backend\LogoController@LEdit')->name('logos.edit');
    Route::post('update/{id}','Backend\LogoController@LUpdate')->name('logos.update');
    Route::get('delete/{id}','Backend\LogoController@LDelete')->name('logos.delete');
});
Route::prefix('sliders')->group(function(){
    Route::get('view','Backend\SlidersController@Lview')->name('sliders.view');
    Route::get('add','Backend\SlidersController@LAdd')->name('sliders.add');
    Route::post('store','Backend\SlidersController@LStore')->name('sliders.store');
    Route::get('edit/{id}','Backend\SlidersController@LEdit')->name('sliders.edit');
    Route::post('update/{id}','Backend\SlidersController@LUpdate')->name('sliders.update');
    Route::get('delete/{id}','Backend\SlidersController@LDelete')->name('sliders.delete');
});
Route::prefix('mission')->group(function(){
    Route::get('view','Backend\MissionController@Lview')->name('mission.view');
    Route::get('add','Backend\MissionController@LAdd')->name('mission.add');
    Route::post('store','Backend\MissionController@LStore')->name('mission.store');
    Route::get('edit/{id}','Backend\MissionController@LEdit')->name('mission.edit');
    Route::post('update/{id}','Backend\MissionController@LUpdate')->name('mission.update');
    Route::get('delete/{id}','Backend\MissionController@LDelete')->name('mission.delete');
});
Route::prefix('vissions')->group(function(){
    Route::get('view','Backend\VissionController@Lview')->name('vissions.view');
    Route::get('add','Backend\VissionController@LAdd')->name('vissions.add');
    Route::post('store','Backend\VissionController@LStore')->name('vissions.store');
    Route::get('edit/{id}','Backend\VissionController@LEdit')->name('vissions.edit');
    Route::post('update/{id}','Backend\VissionController@LUpdate')->name('vissions.update');
    Route::get('delete/{id}','Backend\VissionController@LDelete')->name('vissions.delete');
});

Route::group(['middleware' => 'test'],function () {
    Route::prefix('postNews')->group(function(){
        Route::get('view','Backend\PostController@Lview')->name('postNews.view');
        Route::get('add','Backend\PostController@LAdd')->name('postNews.add');
        Route::post('store','Backend\PostController@LStore')->name('postNews.store');
        Route::get('edit/{id}','Backend\PostController@LEdit')->name('postNews.edit');
        Route::post('update/{id}','Backend\PostController@LUpdate')->name('postNews.update');
        Route::get('delete/{id}','Backend\PostController@LDelete')->name('postNews.delete');
    });
});

Route::prefix('contacts')->group(function(){
    Route::get('view','Backend\contactController@Lview')->name('contacts.view');
    Route::get('add','Backend\contactController@LAdd')->name('contacts.add');
    Route::post('store','Backend\contactController@LStore')->name('contacts.store');
    Route::get('edit/{id}','Backend\contactController@LEdit')->name('contacts.edit');
    Route::post('update/{id}','Backend\contactController@LUpdate')->name('contacts.update');
    Route::get('delete/{id}','Backend\contactController@LDelete')->name('contacts.delete');
});

Route::prefix('communicats')->group(function(){
    Route::post('store','Frontend\FrontedController@contactUsStore')->name('communicats.store');
    // Route::get('edit/{id}','Frontend\FrontedController@LEdit')->name('communicats.edit');
    // Route::post('update/{id}','Frontend\FrontedController@LUpdate')->name('communicats.update');
    // Route::get('delete/{id}','Frontend\FrontedController@LDelete')->name('communicats.delete');
});
// Route::prefix('skills')->group(function(){
//     Route::get('view','Backend\skillsController@Lview')->name('skills.view')->middleware('ktest');
//     Route::get('add','Backend\skillsController@LAdd')->name('skills.add');
//     Route::post('store','Backend\skillsController@LStore')->name('skills.store');
//     Route::get('edit/{id}','Backend\skillsController@LEdit')->name('skills.edit');
//     Route::post('update/{id}','Backend\skillsController@LUpdate')->name('skills.update');
//     Route::get('delete/{id}','Backend\skillsController@LDelete')->name('skills.delete');
// });