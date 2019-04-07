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

// Route::get('/', function () 
//  {
//     return view('welcome');
// });
//
Route::get('/','PagesController@index')->name('index');
Route::get('/about','PagesController@about')->name('about');
Route::get('/contact','PagesController@contact')->name('contact');
Route::post('/contact/send/to/dev','PagesController@c_post')->name('c_post');
//
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/classes/create','ClassController@create');

Route::post('/classes','ClassController@store');

Route::get('/classes/{user_name}/{id}','ClassController@show')->name('class_show');
Route::delete('/classes/{user_name}/{cl_name}/delete','ClassController@dropClass');
Route::post('/classes/add/{id}','ClassController@addStudent');

Route::delete('/classes/{cl_id}/{id}','ClassController@deleteStudent');

Route::get('/classes/{user_name}/{id}/edit','ClassController@edit')->name('class_edit');
Route::put('/classes/{id}/update','ClassController@update');

Route::delete('/classes/{cl_id}/{gr_name}/group/delete','ClassController@deleteGroup');

Route::post('/classes/add/{cl_id}/group','ClassController@addGroup');

Route::get('/attendance/fill/form/for-student','AttendanceController@index')->name('attendance');

Route::get('/attendance/handle/{cl_id}/start/{cl_name}',
	'AttendanceController@start')->name('attendance_start');

Route::post('/attendance/student/try','AttendanceController@activate');

Route::get ('/attendance/tried/success/{cl_id}/{st_id}/{column_name}',
	'AttendanceController@success')->name('att_suc');

Route::get('/attendance/finished/now/{cl_id}','AttendanceController@finish')->name('attendance_finish');

Route::get('/attendance/undo/{cl_id}/forteacher/already/done',
	'AttendanceController@undo')->name('attendance_undo');
// Route::fallback('/','PagesController@index' );

 
