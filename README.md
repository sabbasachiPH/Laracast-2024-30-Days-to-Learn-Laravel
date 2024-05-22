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

### For creating the JobController

```
php artisan make:controller JobController
```

### Web.php file after cleaning

```

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'home', [
    'greeting' => "Hello",
    'name' => "Sabbasachi Saha"
]);
Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);
```

### Cleaning the Web file step by step

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

### web.php file before cleaning looks like below

```

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
Route::get('/jobs/{job}', function (Job $job) {
    // $job = Job::find($id);
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
Route::get('/jobs/{job}/edit', function (Job $job) {

    return view('jobs.edit', ['job' => $job]);
});

//update
Route::patch('/jobs/{job}', function (Job $job) {
    //validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'min:3']
    ]);
    //authorize

    //update the job
    // $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);
    //and persists
    //redirect to the job page
    return redirect('/jobs/' . $job->id);
});

//destroy
Route::delete('/jobs/{job}', function (Job $job) {
    // Job::findOrFail($id)->delete();
    $job->delete();

    return redirect('/jobs');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

```
