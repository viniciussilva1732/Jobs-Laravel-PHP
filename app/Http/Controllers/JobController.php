<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
         $jobs = Job::with('employer')->latest()->simplePaginate(3);

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store()
    {
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
    }   

    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', [
            'job' => $job
        ]);
    }

    public function update(Job $job)
    {
        // Authorization logic here (On hold for now)

        // Validation logic here
        request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'salary' => ['required', 'min:3', 'max:255']
        ]);

        // Laravel Route Model Binding

        $job->Update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);


        // redirect to the job's show page
        return redirect("/jobs/{$job->id}"); 
    }

    public function destroy(Job $job)
    {
        // Authorization logic here
        $job->delete();
        // redirect 

        return redirect('/jobs');
        }
    }
