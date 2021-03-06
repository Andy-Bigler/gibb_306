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

Route::get('/', 'GuestController@welcome')->name('welcome');

Auth::routes();

//Crud Routes
Route::resource('post', 'PostController');
Route::resource('faq', 'FaqController');
Route::post('/comment/{post}', 'CommentController@store')->name('comment.store');
Route::get('/comment/create/{post}', 'CommentController@create')->name('comment.create');
Route::delete('/comment/{comment}/{post}', 'CommentController@destroy')->name('comment.destroy');
Route::put('/comment/{comment}/{post}', 'CommentController@update')->name('comment.update');
Route::get('/comment/{comment}/edit/{post}', 'CommentController@edit')->name('comment.edit');

Route::get('/me/post', 'PostController@user')->name('post.user');
Route::get('/me/faq', 'FaqController@user')->name('faq.user');
Route::get('/home', 'HomeController@index')->name('home');

//Guest Routes
Route::get('/guest/posts', 'GuestController@postIndex')->name('guest.post.index');
Route::get('/guest/post/{post}', 'GuestController@postShow')->name('guest.post.show');
Route::get('/guest/faq', 'GuestController@faqIndex')->name('guest.faq.index');