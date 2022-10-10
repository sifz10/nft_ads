<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\{
    SocialmediaController,
    AdsController,
    UserController,
};

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
})->name('welcome');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware(['auth'])->group(function () {
    Route::post('/save/users/details/', [SocialmediaController::class, 'update'])->name('save.user.data');

    // ads start
    Route::get('/ads/create/', [AdsController::class, 'create'])->name('create.ads');
    Route::get('/ads/targeting/', [AdsController::class, 'tageting'])->name('targeting.ads');
    Route::get('/ads/payment/', [AdsController::class, 'payments'])->name('payments.ads');
    Route::get('/ads/', [AdsController::class, 'index'])->name('index.ads');
    // ads ends

    // Users Start
    Route::get('/users/', [UserController::class, 'index'])->name('index.users');
    // Users End
});



Route::get('/logout', function(Request $request){
  Auth::logout();
  $request->session()->invalidate();
  $request->session()->regenerateToken();
  return redirect('/');
});
require __DIR__.'/auth.php';
