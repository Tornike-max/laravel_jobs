<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::get('/', [JobController::class, 'index']);

Route::get('/jobs', [JobController::class, 'jobs']);

Route::get('/jobs/{id}', [JobController::class, 'show']);

Route::get('/create', [JobController::class, 'create']);

Route::post('/store', [JobController::class, 'store']);

Route::get('/edit/{job}', [JobController::class, 'edit'])
    ->middleware('auth');

Route::patch('/update/{job}', [JobController::class, 'update']);

Route::delete('/destroy/{job}', [JobController::class, 'destroy']);

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::get('/login', [SessionController::class, 'login']);
Route::post('/login', [SessionController::class, 'createSession'])->name('login');
Route::post('/logout', [SessionController::class, 'logout'])->name('logout');
