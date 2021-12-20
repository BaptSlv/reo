<?php

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
})->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/store', function () {
        return view('store');
    })->middleware('checkOwnerCurrentTeam')->name('store');

    Route::get('/simulator', function () {
        return view('simulator');
    })->name('simulator');



    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::get('/organizer', function () {
            return view('organizer');
        })->name('organizer');
        Route::get('/organizer/configure', function () {
            return view('organizer');
        })->name('organizer.configure');
        Route::get('/organizer/add-property', function () {
            return view('organizer');
        })->name('organizer.add-property');
        Route::get('/organizer/property/{id}', function () {
            return view('organizer');
        })->name('organizer.edit-property');
    });

    Route::get('/manager', function () {
        return view('manager');
    })->name('manager');
});