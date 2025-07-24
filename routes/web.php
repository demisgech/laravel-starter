<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use App\Models\Job;

use Illuminate\Support\Facades\Route;

//Route::get('/', fn() => view('index'));
Route::get("/", [HomeController::class, "index"]);

Route::get("/jobs", function () {
//    return view('jobs', [
//        'jobs' => Job::all()
//    ]);
    return [JobController::class, "index"];
});

Route::get("/jobs/{id}", function ($id) {
//    $job = Job::getById($id);
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});

Route::get("/contact", fn() => view('contact'));

Route::get('/users', fn() => UserController::all());
//Route::get('/users/{id}', function ($id) {})

Route::get("/comments",fn()=>CommentController::index());
