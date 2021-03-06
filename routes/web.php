<?php

use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

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

// Home page route
Route::get('/', function(){
    return view('home.home');
});

//Home button and functionalities
Route::get('/signup',[HomeController::class, 'account_register']);
Route::post('/login',[HomeController::class, 'account_login'])->name('login');

//Dashboard Functionalities
Route::resource('/dashboard', DashboardController::class);
