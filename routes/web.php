<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\userControler;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/{ID}', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('greeting', ['name' => 'Finn']);
});
Route::resource('photos', PhotoController::class)
        ->missing(function (Request $request) {
            return Redirect::route('photos.index');
        });
        Route::get('user/register',[userControler::class , 'register']);

        Route::post('user/insert',[userControler::class , 'insert'])->name('user.insert');
        Route::get('user/index',[userControler::class , 'display']);

