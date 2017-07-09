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
// Route::get('/coba', function()
// {
 
//     // Variable data ini yang berupa array ini akan bisa diakses di dalam "view".
//     $data = ['prize' => 'Peke', 'total' => 3 ];
 
//     // "emails.hello" adalah nama view.
//     Mail::send('admin.mail.index', $data, function ($mail)
//     {
//       // Email dikirimkan ke address "momo@deviluke.com" 
//       // dengan nama penerima "Momo Velia Deviluke"
//       $mail->to('titihanifah25@gmail.com', 'Momo Velia Deviluke');
 
//       // Copy carbon dikirimkan ke address "haruna@sairenji" 
//       // dengan nama penerima "Haruna Sairenji"
//       $mail->cc('titi.hanifah@mail.ugm.ac.id', 'Haruna Sairenji');
 
//       $mail->subject('Hello World!');
//     });
 
// });
// Route::get('/admin/mail','MailController', ['only' => [
// 	    	'index'
// 		]]);
Route::resource('admin/user','UserController');
Route::resource('admin/employee', 'EmployeeController');
Route::get('admin/employee/destroy/{id}', 'EmployeeController@destroy');
// Route::resource('admin/mail', 'EmailController');
Route::get('/admin', 'HomeController@index')->name('admin');
// Route::get('/admin/mail','MailController@sendMail');
Auth::routes();


