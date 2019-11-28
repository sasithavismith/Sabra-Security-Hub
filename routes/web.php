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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>['auth','admin']],function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/role-register','Admin\DashboardController@registered');
    Route::get('/role-edit/{id}','Admin\DashboardController@registerededit');
    Route::put('/role-register-update/{id}','Admin\DashboardController@registeredupdate');
    
     Route::delete('/role-delete/{id}','Admin\DashboardController@registereddelete');
   Route::get('/aboutus','Admin\Aboutuscontroller@index');
   Route::post('/save-aboutus','Admin\Aboutuscontroller@store');
    });


    Route::get('/aboutus', function () {
        $allcars=App\Models\vis::all();
        return view('admin.aboutus')->with('vis',$allcars);
    });
    Route::get('/history', function () {
        $allcars=App\Models\vis::all();
        return view('admin.history')->with('vis',$allcars);
    });
    Route::get('/notification', function () {
        
    });
