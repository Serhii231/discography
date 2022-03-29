<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AddNewsController;
use App\Http\Controllers\DiscographyHistoryController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\VereficationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

Route::get('/', [MainController::class, 'index'])->name('main');;

Route::get('/about', [AboutController::class, 'index'])->name('about');;
Route::post('/about/offers', [AboutController::class, 'offers'])->name('about.offers');

Route::get('/discography-histories', [DiscographyHistoryController::class, 'index'])
    ->name('discography_histories');

Route::get('/authorization', [AuthorizationController::class, 'index'])->name('authorization');
Route::get('/registration', [RegistrationController::class, 'index'])->name('registration');
Route::POST('/registration/submit', [RegistrationController::class, 'registration'])->name('registration_check');
Route::POST('/authorization_submit', [AuthorizationController::class, 'authorization'])->name('authorization_submit');
Route::get('/exit', [AuthorizationController::class, 'exit'])->name('exit');
Route::get('/adminpanel', [AdminPanelController::class, 'index'])->name('adminpanel.index');

Route::group([
    'prefix' => 'news',
    'as' => 'news.'
], function() {
    Route::get('/', [NewsController::class, 'index'])->name('index');
    Route::get('/create', [NewsController::class, 'create'])->name('create');
    Route::get('/show', [NewsController::class, 'show'])->name('show');
    Route::post('/', [NewsController::class, 'store'])->name('store');
    Route::get('/{id}/toggle-status', [NewsController::class, 'togglePublishStatus'])
        ->name('toggle_status')
        ->where('id', '[0-9]+');

    Route::get('/{id}/index/update', [NewsController::class, 'index_update'])
        ->name('index.update')
        ->where('id', '[0-9]+');
    Route::get('/{id}/destroy', [NewsController::class, 'destroy'])
        ->name('destroy')
        ->where('id', '[0-9]+');
    Route::post('/{id}/update', [NewsController::class, 'update'])
        ->name('update')
        ->where('id', '[0-9]+');
    Route::get('/{slug}', [NewsController::class, 'one_news'])->name('one');
});


Auth::routes(['verify' => true]);
Route::get('/email/verify', [VereficationController::class, 'index'])->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', [VereficationController::class, 'emailverification'])->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', [VereficationController::class, 'sendemailverification'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');
