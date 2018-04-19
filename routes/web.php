<?php


Route::get('/', function () {
    return view('landing');
});

Route::get('/project/{project}', 'PageController@project')->name('projects');
Route::get('/team/{agent}', 'PageController@team')->name('team');


Auth::routes();


// login
Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/maintenance/customers', 'CustomerController@index')->name('customers.index');
    Route::resource('maintenance/projects', 'Maintenance\ProjectController');
    Route::resource('maintenance/agents', 'Maintenance\AgentController');


    Route::get('maintenance/{project}/project-download/{type}','Maintenance\ProjectController@download')->name('project-download');


});

