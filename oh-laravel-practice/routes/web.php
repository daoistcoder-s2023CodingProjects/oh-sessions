<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])
	->name('home');

Route::get('/profile', [ProfileController::class, 'index'])
	->name('profile');

Route::put('/profile/{id}', [ProfileController::class, 'update'])
	->name('profile.update');

Route::put('/profile/{id}/update-image', [ProfileController::class, 'updateImage'])
	->name('profile.updateImage');

Route::get('/album', [TestController::class, 'index'])
	->name('album');