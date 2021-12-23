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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(
    [
        'register'=> false
    ]
);

Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');

// hanya untuk role admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function(){
    Route::get('/', function(){
        return 'halaman admin';
    });

    Route::get('profile', function(){
        return 'halaman profile admin';
    });
});

    //hanya untuk role member
Route::group(['prefix' => 'member', 'middleware' => ['auth', 'role:member']], function(){
    Route::get('/', function(){
        return 'halaman member';
    });

    Route::get('profile', function(){
        return 'halaman profile member';

});
});


