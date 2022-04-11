<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GithubAuthController;
use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\Auth\LinkedinAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

// -------- Routes Authentication with Google
Route::get('/auth/google',[GoogleAuthController::class, 'redirect'] )->name('auth.google');
Route::get('/auth/google/callback',[GoogleAuthController::class, 'callback'] );


// -------- Routes Authentication with GitHub
Route::get('/auth/github',[GithubAuthController::class, 'redirect'] )->name('auth.github');
Route::get('/auth/github/callback',[GithubAuthController::class, 'callback'] );


// -------- Routes Authentication with Linkedin
Route::get('/auth/linkedin',[LinkedinAuthController::class, 'redirect'] )->name('auth.linkedin');
Route::get('/auth/linkedin/callback',[LinkedinAuthController::class, 'callback'] );

