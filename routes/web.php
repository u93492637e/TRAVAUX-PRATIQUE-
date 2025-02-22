<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\AxeController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\LoginController;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::post('/login',[LoginController::class,'login'])->name('user.login');

// agence
Route::prefix('agence')
        ->controller(AgenceController::class)
        ->name('agence.')
        ->group(function(){
            Route::get('/index','index')->name('index');
            Route::post('/store','store')->name('store');
            Route::post('/update/{agence}','update')->name('update');
            Route::delete('/destroy/{agence}','destroy')->name('destroy');
        }
        );

// axe
Route::prefix('axe')
        ->controller(AxeController::class)
        ->name('axe.')
        ->group(function(){
            Route::get('/index','index')->name('index');
            Route::post('/store','store')->name('store');
            Route::post('/update/{axe}','update')->name('update');
            Route::delete('/destroy/{axe}','destroy')->name('destroy');
        }
);

// region
Route::prefix('region')
        ->controller(RegionController::class)
        ->name('region.')
        ->group(function(){
            Route::get('/index','index')->name('index');
            Route::post('/store','store')->name('store');
            Route::post('/update/{region}','update')->name('update');
            Route::delete('/destroy/{region}','destroy')->name('destroy');
        }
);

// client
Route::prefix('client')
        ->controller(ClientController::class)
        ->name('client.')
        ->group(function(){
            Route::get('/index','index')->name('index');
            Route::post('/store','store')->name('store');
            Route::post('/update/{client}','update')->name('update');
            Route::delete('/destroy/{client}','destroy')->name('destroy');
        }
);
// reservation
Route::prefix('reservation')
        ->controller(ReservationController::class)
        ->name('reservation.')
        ->group(function(){
            Route::get('/index','index')->name('index');
            Route::post('/store','store')->name('store');
            Route::post('/update/{reservation}','update')->name('update');
            Route::delete('/destroy/{reservation}','destroy')->name('destroy');
        }
);
