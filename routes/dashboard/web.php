<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;


Route::prefix('dashboard')->group(function (){

    Route::get('/check',function (){

        App::setLocale('ar');
        return view('dashboard.index');
    })->name('dashboard.');


});
