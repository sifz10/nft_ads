<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ads;
use App\Http\Controllers\{
    SocialmediaController,
    AdsController,
    UserController,
    SettingController,
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
    $ads = Ads::where('user_id', Auth::id())->get();
    return view('dashboard', [
      'ads' => $ads,
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware(['auth'])->group(function () {
    Route::post('/save/users/details/', [SocialmediaController::class, 'update'])->name('save.user.data');

    // ads start
    Route::get('/ads/create/', [AdsController::class, 'create'])->name('create.ads');
    Route::post('/ads/create/done/', [AdsController::class, 'ads_step_one'])->name('ads.store.step_1');


    Route::get('/ads/targeting/{id}', [AdsController::class, 'tageting'])->name('targeting.ads');
    Route::post('/ads/targeting/save/', [AdsController::class, 'tageting_save'])->name('targeting.ads.save');

    Route::get('/ads/payment/{id}', [AdsController::class, 'payments'])->name('payments.ads');
    Route::post('/ads/payment/save', [AdsController::class, 'payments_save'])->name('payments.ads.save');
    Route::get('/ads/payment/approve/without/{id}/payment', [AdsController::class, 'ads_approve'])->name('payments.ads.approve');
    Route::get('/ads/payment/stop/{id}/payment', [AdsController::class, 'ads_stop'])->name('payments.ads.stop');

    Route::get('/ads/', [AdsController::class, 'index'])->name('index.ads');
    Route::get('/ads/details/{id}/', [AdsController::class, 'ads_details'])->name('ads.details');
    Route::get('/dashboard/ads/', [AdsController::class, 'users_ads'])->name('dashboard.index.ads');
    // ads ends

    // Users Start
    Route::get('/users/', [UserController::class, 'index'])->name('index.users');
    Route::get('/users/details/{id}', [UserController::class, 'show_user'])->name('users.show');
    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/users/update/', [UserController::class, 'update'])->name('users.update');
    Route::get('/users/block/{id}', [UserController::class, 'blocked'])->name('users.blocked');
    Route::get('/users/ads/by/{user}/{id}', [UserController::class, 'ads_by_user'])->name('users.show.ads_by');
    // Users End

    // Settings Start
    Route::get('/settings/', [SettingController::class, 'settings_index'])->name('settings.index');
    Route::post('/settings/save', [SettingController::class, 'settings_save'])->name('settings.save');
    // Settings End

    // Ads Code Start
    Route::get('/ads/code/', [AdsController::class, 'ads_codes'])->name('ads.code');
    // Ads Code End
});



Route::get('/logout', function(Request $request){
  Auth::logout();
  $request->session()->invalidate();
  $request->session()->regenerateToken();
  return redirect('/');
});
require __DIR__.'/auth.php';
