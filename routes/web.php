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


Route::get('/jobs', function () {
    // $jobs = Job::with('employer')->get(); //Eager Loading
    // $jobs = Job::with('employer')->paginate(3); //Eager Loading
    // $jobs = Job::with('employer')->simplePaginate(3); //Eager Loading
    $jobs = Job::with('employer')->cursorPaginate(3); //Eager Loading

    return view('jobs', [
        'jobs' => $jobs,
    ]);
});

Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
