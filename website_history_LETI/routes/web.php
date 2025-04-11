<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFakeController;

Route::get('/', function () {
    return view('includes.home');
})->name('home');
Route::get('/Register', function () {
    return view('includes.login');
})->name('form');
Route::get('/history', function(){
    return view('includes.history');
})->name('history');
Route::get('/history/Museum', function () {
    return view('includes.Museum');
})->name('Museum');
Route::get('/history/Question', function () {
    return view('includes.questions');
})->name('question');

Route::post('/login', [DataFakeController::class,'store'])->name('form.store');
Route::get('/logout', [DataFakeController::class, 'logout'])->name('logout');
Route::get('/verify-email/{token}', [DataFakeController::class, 'verifyEmail']);