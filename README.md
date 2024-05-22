# Day-19

## Routes Reloaded - 6 Essential Tips

> About This Episode
> Published Apr 10th, 2024

> Let's return to our routes file. In this episode, I have six essential routing tips that you should be aware of. You'll learn about implicit model binding, route resources, listing your routes, and more.

### Complete CRUD in Laravel-11

-   Create
-   Read
-   Update
-   Delete

### Cleaning the Web file

> Calling controller without grouping

```
    Route::get('/jobs', [JobController::class, 'index']);
    Route::get('/jobs/create', [JobController::class, 'create']);
    Route::get('/jobs/{job}', [JobController::class, 'show']);
    Route::post('/jobs', [JobController::class, 'store']);
    Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);
    Route::patch('/jobs/{job}', [JobController::class, 'update']);
    Route::delete('/jobs/{job}', [JobController::class, 'destroy']);
```

> if we want to avoid duplication of writing JobCotroller::Calass then we can re-write the above as follows

```
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create');
    Route::get('/jobs/{job}', 'show');
    Route::post('/jobs', 'store');
    Route::get('/jobs/{job}/edit', 'edit');
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}', 'destroy');
});

```

> Above Seven Line of code can be replaced with

```
    Route::resource('jobs', JobController::class);
```
