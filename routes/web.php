<?php

use App\Http\Controllers\LogWork\PartnerController;
use App\Http\Controllers\LogWork\WorkStartController;
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

Route::get('/resume', function () {
    return view('welcome');
});
Route::get('/en',function(){
    return view('cv.index');
});
Route::get('/fa',function(){
    return view('cv.index_fa');
});
Route::prefix('log-work')->group(function(){
    Route::get('/',function(){
        return view('log-work.index');
    })->name('log-work.index');
    Route::resource('partner',PartnerController::class)->names('log-work.partner');
    Route::resource('work-start',WorkStartController::class)->names('log-work.work.start');
});

