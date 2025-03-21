<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

// index
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(4);
    // $jobs = Job::all();

    return view('jobs/index', [
        'jobs' => $jobs
    ]);
});

// Create
Route::get('/jobs/create', function () {
    return view('jobs/create');
});

// show job
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs/show', ['job' => $job]);
});

// store job
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
});

// edit job (I mean edit page)
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);

    return view('jobs/edit', ['job' => $job]);
});

// Update job
Route::patch('/jobs/{id}', function ($id) {
    // validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);
    // athorize (On hold...)

    // update the job
    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);
    // redirect
    return redirect('/jobs/' . $job->id);
});

// Delete job
Route::delete('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id);
    $job->delete(); 

    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});
