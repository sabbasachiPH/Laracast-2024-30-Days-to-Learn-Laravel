<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home', [
        'greeting' => "Hello",
        'name' => "Sabbasachi Saha"
    ]);
});

//index
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3); //Eager Loading

    return view('jobs.index', [
        'jobs' => $jobs,
    ]);
});

//create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

//show
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});

//store
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'min:3']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

//edit
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    return view('jobs.edit', ['job' => $job]);
});

//update
Route::patch('/jobs/{id}', function ($id) {
    //validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'min:3']
    ]);
    //authorize

    //update the job 
    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);
    //and persists
    //redirect to the job page
    return redirect('/jobs/' . $job->id);
});

//destroy
Route::delete('/jobs/{id}', function ($id) {
    Job::findOrFail($id)->delete();

    return redirect('/jobs');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
