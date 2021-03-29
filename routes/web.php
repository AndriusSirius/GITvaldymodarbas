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
Route::get('/messages', [\App\Http\Controllers\MessagesController::class, 'index'])->name('messages');

Route::any('/create_message', [\App\Http\Controllers\MessagesController::class, 'create'])->name('create_message');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';
