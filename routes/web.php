<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogWork\PartnerController;
use App\Http\Controllers\LogWork\WorkStartController;

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

Route::get('/resume', function () {
    return view('welcome');
});
Route::get('/',function(){
    return view('welcome');
});
Route::get('/fa',function(){
    return view('cv.index_fa');
});

Route::get('/home',function(){
    return view('log-work.index');
})->name('home')->middleware('auth');

Route::prefix('log_work')->middleware('auth')->group(function(){
    Route::resource('partner',PartnerController::class)->names('log-work.partner');
    Route::resource('work-start',WorkStartController::class)->names('log-work.work.start');
});


