<?php

use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;


Route::prefix('dashboard')->group(function (){

    Route::get('/index',[DashboardController::class ,'index'])->name('dashboard.index');


});
