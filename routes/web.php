<?php


Route::get('/', function () {
    return view('landing');
});

Route::get('/project/{project}', 'PageController@project')->name('projects');


Auth::routes();


// login
Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/maintenance/customers', 'CustomerController@index')->name('customers.index');
    Route::resource('maintenance/projects', 'Maintenance\ProjectController');


    Route::get('maintenance/{project}/project-download/{type}','Maintenance\ProjectController@download')->name('project-download');


});

