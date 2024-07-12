<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Employer;
use App\Models\JobListing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }

    public function jobs()
    {
        $jobs = JobListing::with('employer')->latest()->paginate(3);

        return view('jobs', [
            'jobs' => $jobs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employers = Employer::latest()->get();
        return view('create', [
            'employers' => $employers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'position' => ['required', 'min:3'],
            'salary' => ['required'],
            'employer_id' => ['required']
        ]);

        $job = JobListing::create($data);

        Mail::to($job->employer->user)->queue(
            new JobPosted($job)
        );

        return redirect('/jobs');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $job = JobListing::findOrFail($id);

        return view('show', [
            'job' => $job
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employers = Employer::latest()->get();
        $job = JobListing::findOrFail($id);

        Gate::authorize('can-make-actions', $job);

        return view('edit', [
            'job' => $job,
            'employers' => $employers
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'position' => ['nullable', 'min:3'],
            'salary' => ['nullable'],
            'employer_id' => ['required']
        ]);

        $job = JobListing::findOrFail($id);
        Gate::authorize('can-make-actions', $job);


        $job->update($data);

        return redirect("/jobs");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $job = JobListing::findOrFail($id);

        $job->delete();
        return redirect("/jobs");
    }
}
