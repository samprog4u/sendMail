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
Route::get('/admin/mail','MailController@index');
// Route::post('/admin/mail/send','MailController@send')->name('mail.send');
// Route::send('admin/mail/send', 'MailController@send');
// Route::get('/admin/mail','MailController', ['only' => [
// 	    	'index'
// 		]]);
Route::get('/admin/mail/sendMail', function()
{
  $data = ['subject' => 'subject' , 'email' => 'email' ];
  Mail::send(['text' => 'admin.mail.backup'], $data, function ($mail)
  {
    $mail->to('titihanifah25@gmail.com', 'Titi Hanifah');
    $mail->cc('abdurrahman.trimanto@mail.ugm.ac.id', 'Abdurrahman');
    $mail->subject('Hello World!');
  });
});
Route::resource('admin/user','UserController');
Route::resource('admin/db','DbController');
Route::post('admin/user/sendEmailReminder','UserController@sendEmailReminder');
Route::resource('/admin/employee','EmployeeController');
Route::get('admin/employee/destroy/{id}', 'EmployeeController@destroy');
Route::get('admin/user/destroy/{id}', 'UserController@destroy');

Route::get('/admin', 'HomeController@index')->name('admin');
// Route::get('/admin/mail','MailController@sendMail');
Auth::routes();
