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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','AdminController@login')->name('login');
Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home'); // default , ami nicher line change koresi
Route::get('/dashboard', 'AdminController@index')->name('dashboard');

Route::prefix('user')->group(function(){
    Route::get('/index', 'Backend\UserController@index')->name('user.index');
    Route::get('/show/{id}', 'Backend\UserController@show')->name('user.show');
    Route::get('/create', 'Backend\UserController@create')->name('user.create');
    Route::post('/store', 'Backend\UserController@store')->name('user.store');
    Route::get('/edit/{id}', 'Backend\UserController@edit')->name('user.edit');
    Route::post('/update/{id}', 'Backend\UserController@update')->name('user.update');
    Route::get('/destroy/{id}', 'Backend\UserController@destroy')->name('user.destroy');
    Route::get('/password', 'Backend\UserController@password')->name('user.password');
    Route::post('/password/update', 'Backend\UserController@passwordUpdate')->name('user.password.update');
    // Route::get('/profile', 'Backend\UserController@profile')->name('user.profile');
});
Route::prefix('settings')->group(function(){
    Route::get('cariculam/index', 'Backend\cariculamController@index')->name('cariculam.index');
    Route::get('cariculam/create', 'Backend\cariculamController@create')->name('cariculam.create');
    Route::post('cariculam/store', 'Backend\cariculamController@store')->name('cariculam.store');
    Route::get('cariculam/edit/{id}', 'Backend\cariculamController@edit')->name('cariculam.edit');
    Route::post('cariculam/update/{id}', 'Backend\cariculamController@update')->name('cariculam.update');
    Route::get('cariculam/destroy/{id}', 'Backend\cariculamController@destroy')->name('cariculam.destroy');
// Departments
    Route::get('department/index', 'Backend\DepartmentController@index')->name('department.index');
    Route::get('department/create', 'Backend\DepartmentController@create')->name('department.create');
    Route::post('department/store', 'Backend\DepartmentController@store')->name('department.store');
    Route::get('department/edit/{id}', 'Backend\DepartmentController@edit')->name('department.edit');
    Route::post('department/update/{id}', 'Backend\DepartmentController@update')->name('department.update');
    Route::get('department/destroy/{id}', 'Backend\DepartmentController@destroy')->name('department.destroy');
//semesters
    Route::get('semester/index', 'Backend\SemesterController@index')->name('semester.index');
    Route::get('semester/create', 'Backend\SemesterController@create')->name('semester.create');
    Route::post('semester/store', 'Backend\SemesterController@store')->name('semester.store');
    Route::get('semester/edit/{id}', 'Backend\SemesterController@edit')->name('semester.edit');
    Route::post('semester/update/{id}', 'Backend\SemesterController@update')->name('semester.update');
    Route::get('semester/destroy/{id}', 'Backend\SemesterController@destroy')->name('semester.destroy');
//sessions
    Route::get('session/index', 'Backend\SessionController@index')->name('session.index');
    Route::get('session/create', 'Backend\SessionController@create')->name('session.create');
    Route::post('session/store', 'Backend\SessionController@store')->name('session.store');
    Route::get('session/edit/{id}', 'Backend\SessionController@edit')->name('session.edit');
    Route::post('session/update/{id}', 'Backend\SessionController@update')->name('session.update');
    Route::get('session/destroy/{id}', 'Backend\SessionController@destroy')->name('session.destroy');
//authors
    Route::get('author/index', 'Backend\AuthorController@index')->name('author.index');
    Route::get('author/create', 'Backend\AuthorController@create')->name('author.create');
    Route::post('author/store', 'Backend\AuthorController@store')->name('author.store');
    Route::get('author/edit/{id}', 'Backend\AuthorController@edit')->name('author.edit');
    Route::post('author/update/{id}', 'Backend\AuthorController@update')->name('author.update');
    Route::get('author/destroy/{id}', 'Backend\AuthorController@destroy')->name('author.destroy');
//publications
    Route::get('publication/index', 'Backend\publicationController@index')->name('publication.index');
    Route::get('publication/create', 'Backend\publicationController@create')->name('publication.create');
    Route::post('publication/store', 'Backend\publicationController@store')->name('publication.store');
    Route::get('publication/edit/{id}', 'Backend\publicationController@edit')->name('publication.edit');
    Route::post('publication/update/{id}', 'Backend\publicationController@update')->name('publication.update');
    Route::get('publication/destroy/{id}', 'Backend\publicationController@destroy')->name('publication.destroy');
});
Route::prefix('book')->group(function(){    
    Route::get('/index', 'Backend\BookController@index')->name('book.index');
    Route::get('/create', 'Backend\BookController@create')->name('book.create');
    Route::post('/store', 'Backend\BookController@store')->name('book.store');
    Route::get('/edit/{id}', 'Backend\BookController@edit')->name('book.edit');
    Route::post('/update/{id}', 'Backend\BookController@update')->name('book.update');
    Route::get('/destroy/{id}', 'Backend\BookController@destroy')->name('book.destroy');

    
    
    Route::get('/purchase/index', 'Backend\PurchaseController@index')->name('purchase.index');
    Route::get('/purchase/create', 'Backend\PurchaseController@create')->name('purchase.create');
    Route::post('/purchase/store', 'Backend\PurchaseController@store')->name('purchase.store');
    Route::get('/purchase/aprove/{id}', 'Backend\PurchaseController@aprove')->name('purchase.aprove');
    Route::get('/purchase/destroy/{id}', 'Backend\PurchaseController@destroy')->name('purchase.destroy');
    
    Route::get('/distribution', 'Backend\BookDistributionController@create')->name('distribution.create');
    Route::post('/distribution/issue-for-student', 'Backend\BookDistributionController@store')->name('distribution.store');
    Route::get('/distribution/index', 'Backend\BookDistributionController@index')->name('distribution.index');
    Route::get('/distribution/details/{roll}', 'Backend\BookDistributionController@details')->name('distribution.details');
    Route::get('/subject-return/{id}', 'Backend\BookDistributionController@return')->name('subject.return');
});

Route::get('/getstudent', 'Backend\DefaultController@getStudent')->name('getstudent');
Route::get('/get-publication', 'Backend\DefaultController@getPublication')->name('getpublication');
Route::get('/get-author', 'Backend\DefaultController@getAuthor')->name('get.author');

Route::prefix('student')->group(function(){
    Route::get('/index', 'Backend\StudentController@index')->name('student.index');
    Route::get('/show/{id}', 'Backend\StudentController@show')->name('student.show');
    Route::get('/create', 'Backend\StudentController@create')->name('student.create');
    Route::post('/store', 'Backend\StudentController@store')->name('student.store');
    Route::get('/edit/{id}', 'Backend\StudentController@edit')->name('student.edit');
    Route::post('/update/{id}', 'Backend\StudentController@update')->name('student.update');
    Route::get('/destroy/{id}', 'Backend\StudentController@destroy')->name('student.destroy');
});
