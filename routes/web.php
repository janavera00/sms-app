<?php

use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

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
    return view('functions.index');
});
Route::get('/dashboard', function () {
    return view('functions.dashboard');
});
Route::get('/forgot-password', function () {
    return view('functions.forgotpassword');
});
Route::get('/login', function () {
    return view('functions.login');
});
Route::get('/masterlist', function () {
    return view('functions.masterlist');
});
Route::get('/noticeboard', function () {
    return view('functions.noticeboard-add');
});
Route::get('/noticeboard', function () {
    return view('functions.noticeboard');
});
Route::get('/profile', function () {
    return view('functions.profile');
});
Route::get('/registration', function () {
    return view('functions.registration_form');
});     
Route::get('/section_add', function () {
    return view('functions.section_add');
});
Route::get('/section_list', function () {
    return view('functions.section_list');
});
Route::get('/section', function () {
    return view('functions.section');
});
Route::get('/signup', function () {
    return view('functions.signup');  
});
Route::get('/nav', function () {
    return view('components._navbar');  
});

Route::resource('/account', AccountController::class);



Route:: get('/new',function(){
return view ('new.home');
});