<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProfileController;
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
    return redirect()->route('hotel.index');
});

Auth::routes();

Route::resource('hotel',HotelController::class);

Route::get('/profile/{user}' , [ProfileController::class , 'index'])->name('profile.update');

Route::get('/about' , function () {
    return view('about');
})->name('about.index');

Route::post('/profile/update/{user}' , [ProfileController::class , 'update']);

Route::get('/home', function () {
    return redirect()->route('hotel.index');
});
