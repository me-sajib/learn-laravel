<?php

// use App\Http\Controllers\Backend\FrontController as BackendFrontController;

use App\Http\Controllers\Backend\PostsController;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\Frontend\FrontController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::name('frontend.')->group(function(){
    Route::get('/', [FrontController::class, "index"]);
    Route::get('/contacts', [FrontController::class, "contact"])->name("contact");
});

// group routes
Route::name('backend.')->prefix("admin")->group(function () {
    Route::get("/users", [UsersController::class, "index"])->name("users.index");
    Route::get("/users/{id}", [UsersController::class, "show"])->name("users.show");

    // add posts resource route
    Route::resource("posts", PostsController::class);
    // Route::get('/users', [BackendFrontController::class, "index"])->name("contact");
    // Route::post('/users', [BackendFrontController::class, "usersPost"]);
    // Route::get('/user/{id}/{name?}', [BackendFrontController::class, "user"])->where('id', '[0-9]+');
});