<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AppController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin/auth/{any}', [AppController::class, 'admin'])->where('any', '.*')->name('lvs.app.admin.auth.any');
Route::get('/admin/auth', function () { return redirect()->route('lvs.app.admin.auth.any', 'sign-in'); } );
Route::get('/admin', [AppController::class, 'admin'])->where('any', '.*')->name('lvs.app.admin');
Route::get('/admin/{any}', [AppController::class, 'admin'])->where('any', '.*')->name('lvs.app.admin.any');

Route::get('{any}', [AppController::class, 'visitor'])->where('any', '.*')->name('lvs.app.visitor.any');
