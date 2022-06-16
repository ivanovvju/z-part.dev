<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



// Админ
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {
    Route::get('/', [App\Http\Controllers\Admin\MainController::class, 'index'])->name('admin.index');
    Route::resource('/users', '\App\Http\Controllers\Admin\UserController');
});

// Покупатель
Route::group(['prefix' => 'buyer', 'namespace' => 'Buyer', 'middleware' => 'buyer'], function () {
    Route::get('/', [App\Http\Controllers\Buyer\BuyerController::class, 'index'])->name('buyer.index');
    Route::get('/link', [MainController::class, 'link'])->name('link');
    Route::get('/download/{file}', [MainController::class, 'getDownload'])->name('download');
    Route::post('query', ['\App\Http\Controllers\Import\QueryController', 'import'])->name('query_import');

    Route::get('/history-request', [App\Http\Controllers\Buyer\BuyerController::class, 'historyRequest'])->name('buyer.history');
    Route::get('/cabinet', [App\Http\Controllers\Buyer\BuyerController::class, 'cabinet'])->name('buyer.cabinet');
    Route::get('/sample-request', [App\Http\Controllers\Buyer\BuyerController::class, 'sampleRequest'])->name('buyer.sample.request');
    Route::get('/selection-parts', [App\Http\Controllers\Buyer\BuyerController::class, 'selectionParts'])->name('buyer.selection.parts');
//    Route::get('/download-report', [App\Http\Controllers\Buyer\BuyerController::class, 'downloadReport'])->name('buyer.download.report.parts');
});
//Route::get('/welcome_buyer', [App\Http\Controllers\Buyer\BuyerController::class, 'start'])->name('buyer.start');

// Поставщик
Route::group(['prefix' => 'provider', 'namespace' => 'Provider', 'middleware' => 'provider'], function () {
    Route::get('/', [App\Http\Controllers\Provider\ProviderController::class, 'index'])->name('provider.index');
    Route::post('import', ['\App\Http\Controllers\Import\ProductController', 'import'])->name('import');

    Route::get('/history-request', [App\Http\Controllers\Provider\ProviderController::class, 'historyRequest'])->name('provider.history');
    Route::get('/cabinet', [App\Http\Controllers\Provider\ProviderController::class, 'cabinet'])->name('provider.cabinet');
    Route::get('/sample-price', [App\Http\Controllers\Provider\ProviderController::class, 'samplePrice'])->name('provider.sample.price');
    Route::get('/selection-parts', [App\Http\Controllers\Provider\ProviderController::class, 'selectionParts'])->name('provider.selection.parts');
    Route::get('/download-report', [App\Http\Controllers\Provider\ProviderController::class, 'downloadReport'])->name('provider.download.report.parts');
});

Route::get('/', [MainController::class, 'index'])->name('home');

// Авторизация для администратора
Route::get('/login', [UserController::class, 'loginForm'])->name('login_admin.create');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

// Авторизация для пользователей
Route::get('/login_user', [UserController::class, 'loginUserForm'])->name('login_user_form');
Route::post('/login_user', [UserController::class, 'loginUser'])->name('login_user');
Route::get('/logout_user', [UserController::class, 'logoutUser'])->name('logout_user')->middleware('auth');

