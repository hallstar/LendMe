<?php
use App\Http\Controllers\Auth\LoginController;
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

// Route::group(['namespace' => 'Auth'], function () {

    Route::get('login', [LoginController::class, 'showLoginForm'])
        ->name('login')
        ->middleware('guest');

// });

// Route::get('/{any}', 'ApplicationController')->where('any', '.*');
