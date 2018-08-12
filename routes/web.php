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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

 Route::get('/result',function(){
   return view('result');
 });
 Route::get('/exam',function(){
   return view('exam');
 });

// Route::get('/exam-name',function(){
//   return view('exam_name');
// });
// Route::get('/exam',function(){
//   return view('exam');
// });



/*
  admin routes
*/
Route::get('/admin/student-information','AdminPagesController@studentPage')->name('students.information')->middleware('role:admin');
Route::get('/admin/subjects','AdminPagesController@addSubject')->name('addSubject')->middleware('role:admin');
Route::post('/admin/subjects','AdminPagesController@storeSubject')->name('storeSubject')->middleware('role:admin');
Route::get('/admin/view-subjects','AdminPagesController@indexSubject')->name('index.subject')->middleware('role:admin');
Route::get('/admin/levels/create','LevelsController@create')->name('create.levels')->middleware('role:admin');
Route::post('/admin/levels/store','LevelsController@store')->name('store.levels')->middleware('role:admin');
Route::get('/admin/levels/index','LevelsController@index')->name('index.levels')->middleware('role:admin');



/*
  students routes
*/

Route::get('/register-student','StudentController@create')->name('register.form')->middleware('role:student');
Route::post('/register-student','StudentController@store')->name('register.student')->middleware('role:student');
Route::get('/student','StudentPagesController@UsersPage')->name('users.student')->middleware('role:student');


/*
  teachers routes
*/

Route::get('/register-teacher','TeachersController@create')->name('register.teacher.form')->middleware('role:teacher');
Route::post('/register-teacher','TeachersController@store')->name('register.teacher')->middleware('role:teacher');
Route::get('/teacher','TeachersController@index')->name('index.teacher')->middleware('role:teacher');


Route::get('/attendance/{id}/{level_id}','AttendanceController@test');

Route::post('/exam','AdminPagesController@examDetails');
Route::get('/exam-name','AdminPagesController@exam_manages');

Route::post('/exam-name','AdminPagesController@exam_details_store');
Route::get('/result','ResultsController@make_result');
Route::post('/result','ResultsController@result_store');
Route::post('/result','ResultsController@result');

Route::get('/result','ResultsController@make_result');
