<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'greeting' => "Hello",
        'name' => "Sabbasachi Saha"
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => '1',
                'title' => 'Web Developer',
                'salary' => '100,000'
            ],
            [
                'id' => '2',
                'title' => 'Full Stack Web Developer',
                'salary' => '200,000'
            ],
            [
                'id' => '3',
                'title' => 'Software Engineer',
                'salary' => '300,000'
            ],
            [
                'id' => '4',
                'title' => 'Project Manager',
                'salary' => '400,000'
            ]
        ]
    ]);
});

Route::get('/job/{id}', function ($id) {
    $jobs = [
        [
            'id' => '1',
            'title' => 'Web Developer',
            'salary' => '100,000'
        ],
        [
            'id' => '2',
            'title' => 'Full Stack Web Developer',
            'salary' => '200,000'
        ],
        [
            'id' => '3',
            'title' => 'Software Engineer',
            'salary' => '300,000'
        ],
        [
            'id' => '4',
            'title' => 'Project Manager',
            'salary' => '400,000'
        ]
    ];

    // \Illuminate\Support\Arr::first($jobs, function ($job) use ($id) {
    //     return $job['id'] === $id;
    // });

    // Alternative way write above function is using shorthand array function

    $job = \Illuminate\Support\Arr::first($jobs, fn ($job) => $job['id'] === $id);

    return view('job', ['job' => $job]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
