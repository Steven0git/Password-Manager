<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthRoute;
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

Route::get('/', [AuthRoute::class,'Home'])->name("home");

// Routes for registration, login, and password reset
Route::get('/signup', [AuthRoute::class, 'register'])->name("signup");
Route::post('/signup', [AuthRoute::class, 'doRegister']);

Route::get('/login', [AuthRoute::class, 'login'])->name("login");
Route::post('/login', [AuthRoute::class, 'doLogin']);
Route::post('/logout',[AuthRoute::class,'logout']);
Route::get('/reset', [AuthRoute::class, 'reset'])->name("reset");
Route::post('/reset', [AuthRoute::class, 'doReset']);

// Example protected route requiring authentication
Route::middleware(['AppAuth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});

Route::get("/add", function (){
  return view('add',["title"=>"Add The Data"]);
});

/*
// Sample of Main Page
Route::get('/', function (){
    return view('main-page');
});
*/