<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
// Contact page
Route::view('/contact', 'contact');

// Route::controller(JobController::class)->group(function () {
//     // index
//     Route::get('/jobs', 'index');
//     // Create
//     Route::get('/jobs/create', 'create');
//     // show job
//     Route::get('/jobs/{job}', 'show');
//     // store job
//     Route::post('/jobs', 'store');
//     // edit job (I mean edit page)
//     Route::get('/jobs/{job}/edit', 'edit');
//     // Update job
//     Route::patch('/jobs/{job}', 'update');
//     // Delete job
//     Route::delete('/jobs/{job}', 'destroy');
// });

Route::resource('jobs', JobController::class);
