<?php

use App\Http\Controllers\JobController;
use App\Models\Employer;
use App\Models\JobListing;
use Illuminate\Support\Facades\Route;


Route::get('/', [JobController::class, 'index']);

Route::get('/jobs', [JobController::class, 'jobs']);

Route::get('/jobs/{id}', [JobController::class, 'show']);

Route::get('/create', [JobController::class, 'create']);

Route::post('/store', [JobController::class, 'store']);

Route::get('/edit/{id}', [JobController::class, 'edit']);

Route::patch('/update/{id}', [JobController::class, 'update']);

Route::delete('/destroy/{id}', [JobController::class, 'destroy']);


Route::get('/contact', function () {
    return view('contact');
});
