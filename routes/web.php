<?php
// use App\Http\Controllers\Auth\LoginController;
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

// Route::get('home', 'Admin\HomeController@index')->name('home');
// Route::get('company', 'Company\Auth\LoginController@showLoginForm')->name('comp');

Route::domain('admin.lendme.test')->group(function () {

    Route::group(['as' => 'admin.', 'namespace' => 'Admin'], function () {

        Route::group(['namespace' => 'Auth', 'middleware' => 'guest'], function () {

            Route::get('login', 'LoginController@showLoginForm')->name('login');
            Route::post('login', 'LoginController@login')->name('login.attempt');
            Route::post('logout', 'LoginController@logout')->name('logout');

        });
        
        Route::get('home', 'HomeController@index')->name('home')->middleware('auth:admins');

    });
    
});

// });

// Route::get('/{any}', 'ApplicationController')->where('any', '.*');
