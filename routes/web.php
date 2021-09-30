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
    return redirect()->route('site.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'site', 'as' => 'site.'],function(){
    route::get('/home', 'Site\HomeController@index')->name('home');
    route::get('/overview','Site\OverviewController@index')->name('overview');
    route::get('/room/{slug}', 'Site\RoomController@index')->name('room');
    route::get('/facilities', 'Site\FacilitiesController@index')->name('facilities');
    route::get('/gallery/{slug}/FACILITIES', 'Site\GalleryController@index')->name('gallery');
    route::get('/location', 'Site\LocationController@index')->name('location');
    route::get('/contact', 'Site\ContactController@index')->name('contact');

    Route::get('/Languagechange/{lang}', function ($locale) {
	    Session::put('locale', $locale); // กำหนดค่าตัวแปรแบบ locale session ให้มีค่าเท่ากับตัวแปรที่ส่งเข้ามา 
	    return redirect()->back(); // สั่งให้โหลดหน้าเดิม
	})->name('.Languagechange');
});
