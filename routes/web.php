<?php

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
    return view('welcome');
});

Route::view('dashboard', 'dashboard')
->name('dashboard')
->middleware(['auth', 'verified']);


// Profile setting routes
Route::middleware(['auth', 'verified'])->group(function ()
{
	Route::get('/profile', [ProfileController::class, 'editProfile'])->name('profile');
	Route::post('profile/avatar', [ProfileController::class, 'updateAvatar'])->name('profile.avatar');
	Route::delete('profile/deleteavatar', [ProfileController::class, 'removeOldAvatar'])->name('profile.deleteavatar');
	Route::post('profile/remove-device', [ProfileController::class, 'removeDevice'])->name('profile.removeDevice');
});
