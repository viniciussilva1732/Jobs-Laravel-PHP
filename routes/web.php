<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});


// Jobs-Index
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

// Jobs-Create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Jobs-Show
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
        
    return view('jobs.show', [
        'job' => $job
    ]);
});

// Jobs-Store
Route::post('/jobs', function () {
    //validation logic here
    request()->validate([
        'title' => ['required', 'min:3', 'max:255'],
        'salary' => ['required', 'min:3', 'max:255']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1 
    ]);

    return redirect('/jobs');
});

// Jobs-Edit
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
        
    return view('jobs.edit', [
        'job' => $job
    ]);
});

// Jobs-Update
Route::patch('/jobs/{id}', function ($id) {
    // Validation logic here
    request()->validate([
        'title' => ['required', 'min:3', 'max:255'],
        'salary' => ['required', 'min:3', 'max:255']
    ]);

    // Authorization logic here (On hold for now)


    // Update the job

    $job = Job::findOrFail($id);
    // Laravel Route Model Binding

    $job->Update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);


    // redirect to the job's show page
    return redirect("/jobs/{$job->id}"); 
});

// Jobs-Destroy
Route::delete('/jobs/{id}', function ($id) {
    // Authorization logic here

    // delete the job
    Job::findOrFail($id)->delete();
    // redirect 

    return redirect('/jobs');
});


Route::get('/contact', function () {
    return view('contact');
});