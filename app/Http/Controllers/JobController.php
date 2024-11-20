<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Mail\JobPosted;
use Illuminate\Support\Facades\Mail;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{  
    public function index()
    {
        $job = Job::with('employer')->latest()->simplePaginate(3);
        return view('jobs.index',['jobs' => $job]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store()
    {
        request()->validate([
            'title' => ['required','min:3'],
            'salary' => ['required']
        ]);
    
        $job = Job::create([
                'title' => request('title'),
                'salary' => request('salary'),
                'employer_id' => 1
        ]);

        Mail::To($job->employer->user)->send(new JobPosted($job));

        return redirect('/jobs');
    }

    public function show(Job $job)
    {
        
        return view('jobs.show',['job' => $job]);
    }

    public function edit(Job $job)
    {
        /*
        //means that you must signed in first
        if (Auth::guest()) {
            return redirect('/login');
        }
           */ 
        //if not authorized then abort() built in
      
        //Gate::authorize('edit-job',$job);
       
        return view('jobs.edit',['job' => $job]);
    }

    public function update(Job $job)
    {
        request()->validate([
            'title' => ['required','min:3'],
            'salary' => ['required']
            ]);
            $job->update([
                'title' => request('title'),
                'salary' => request('salary')
                ]);
            return  redirect('/jobs/'.$job->id);
    }

    public function delete(Job $job)
    {
        $job->delete();
        return  redirect('/jobs');
    }
}