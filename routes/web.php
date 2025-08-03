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

Route::get("/jobs", function () {
//    return view('jobs', [
//        'jobs' => Job::all()
//    ]);
//    return [JobController::class, "index"];
    return (new JobController())->index();
});

Route::get("/jobs/{id}", function ($id) {
//    $job = Job::getById($id);
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});

Route::get("/contact", fn() => view('contact'));

Route::get('/users', fn() => UserController::index());
//Route::get('/users/{id}', function ($id) {})

Route::get("/comments", fn() => CommentController::index());

Route::get("/employers",fn()=>(new EmployerController())->index());
Route::get("/posts",fn()=>(new PostController())->index());
Route::get("/tags",fn()=>(new TagController())->index());
