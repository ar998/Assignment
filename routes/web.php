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

Route::get('/', 'PagesController@index')->name('home');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/contact', 'PagesController@contact')->name('contact');

Route::post('/contact', 'PagesController@store')->name('contact.store');

Route::get('/thanks/{name}', 'PagesController@thanks')->name('thanks');

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/logout', function () {
    return view('pages.logout');
});

Route::get('/signup', function () {
    return view('pages.signup');
});

Route::get('/view', function () {
    return view('pages.view');
});

Route::get('/card', function () {
    return view('pages.card');
});

//Route::post('/contact', function () {
    //$data = request()->all();
    //echo "Email:".$data['email']. '<br>';
    //echo "Subject:".$data['subject']. '<br>';
    //echo "Body:".$data['body'];
//});