<?php

use App\Http\Controllers\RatingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class);
Route::resource('companies', CompanyController::class);
Route::resource('comments', CommentController::class);
Route::resource('ratings', RatingController::class);
