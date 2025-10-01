<?php

use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

//Route::get('/', fn() => view('index'));
//Route::get("/", [HomeController::class, "index"]);
Route::view("/", "index");

//Route::get("/jobs", [JobController::class, "index"]);
//Route::get("/jobs/create", [JobController::class, "create"]);
//Route::post("/jobs", [JobController::class, 'store']);
//Route::get("/jobs/{job}", [JobController::class, "show"]);
//Route::get("/jobs/{job}/edit", [JobController::class, "edit"]);
//Route::put("/jobs/{job}", [JobController::class, 'update']);
//Route::delete("/jobs/{job}", [JobController::class, 'destroy']);

// Grouping routes

//Route::controller(JobController::class)->group(function () {
//    Route::get('/jobs', 'index');
//    Route::get('/jobs/create', 'create');
//    Route::post('/jobs', 'store');
//    Route::get('/jobs/{job}', 'show');
//    Route::get('/jobs/{job}/edit', 'edit');
//    Route::put('/jobs/{job}', 'update');
//    Route::delete('/jobs/{job}', 'destroy');
//});

// Route resource
Route::resource("jobs", JobController::class, [
//    'only' => ['index'],
//    or we can use except
//'except' => ['index']
]);

Route::controller(RegisterUserController::class)->group(function () {
    Route::get("/register", "register");
    Route::post("/register", "store");
});

Route::controller(SessionController::class)->group(function () {
    Route::get("/login", "create");
    Route::post("/login", "store");
    Route::post("/logout", "destroy");
});

Route::get("/comments", fn() => CommentController::index());
Route::get("/employers", fn() => (new EmployerController())->index());
Route::get("/posts", fn() => (new PostController())->index());
Route::get("/tags", fn() => (new TagController())->index());

Route::get("/contact", fn() => view('contact'));
Route::get("/dashboard", [DashboardController::class, "index"]);
