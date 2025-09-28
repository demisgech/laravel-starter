<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Models\Job;

use Illuminate\Support\Facades\Route;

//Route::get('/', fn() => view('index'));
Route::get("/", [HomeController::class, "index"]);

// index
Route::get("/jobs", function () {
//    Lazy Loading
//    $jobs = Job::all();

//    Eager Loading
//    $jobs = Job::with("employer")->orderBy("created_at", "desc")->get();
//    Pagination
    $jobs = Job::with("employer")
        ->orderBy("created_at", "desc")
        ->paginate(perPage: 3);
//    $jobs = Job::with("employer")->orderBy("created_at", "desc")->simplePaginate(perPage: 3);
//    $jobs = Job::with("employer")->simplePaginate(3);
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
//    return [JobController::class, "index"];
//    return (new JobController())->index();
});
// Create
Route::get("/jobs/create", fn() => view("jobs.create"));

//Show
//Route::get("/jobs/{id}", function ($id) {
////    $job = Job::getById($id);
//    $job = Job::findOrFail($id);
//    return view('jobs.show', ['job' => $job]);
//});
Route::get("/jobs/{job}", function (Job $job) {
    return view('jobs.show', ['job' => $job]);
});

//Store
Route::post("/jobs", function () {
    $validatedData = request()->validate([
        "title" => ["required", 'min:3'],
        'salary' => ['required', 'numeric', 'gt:0'],
    ]);
//    dd($_POST);
//    dd(request()->all());
    Job::create([
        "title" => $validatedData["title"],
        "salary" => $validatedData["salary"],
        "employer_id" => 1
    ]);

    return redirect("/jobs");
});
// edit
Route::get("/jobs/{job}/edit", function (Job $job) {
    return view('jobs.edit', ['job' => $job]);
});

// Update
Route::put("/jobs/{job}", function (Job $job) {
//    authorize
//    validate
//    update
//    persist(save)
//    redirect

    $validatedData = request()->validate([
        "title" => ["required", 'min:3'],
        'salary' => ['required', 'numeric', 'gt:0'],
    ]);
//    $job = Job::find($id);
//    $job->title = $validatedData["title"];
//    $job->employer_id = $validatedData["employer_id"];
//    $job->save();
//    another way
    $job->update([
        "title" => $validatedData["title"],
        "salary" => $validatedData["salary"],
    ]);
    return redirect("/jobs/{$job->id}");
});

// Destroy
Route::delete("/jobs/{job}", function (Job $job) {
    $job->delete();
    return redirect("/jobs");
});

Route::get("/contact", fn() => view('contact'));
Route::get('/users', fn() => UserController::index());
//Route::get('/users/{id}', function ($id) {})

Route::get("/comments", fn() => CommentController::index());

Route::get("/employers", fn() => (new EmployerController())->index());
Route::get("/posts", fn() => (new PostController())->index());
Route::get("/tags", fn() => (new TagController())->index());
