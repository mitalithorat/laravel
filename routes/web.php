<?php
use App\Http\Controllers\AccountController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProvisionController;
use App\http\Controllers\StudentController;
use App\Http\Controllers\ContactController;
use App\http\Controllers\PersonController;

use Illuminate\support\Facades\Auth;

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

Auth::routes();
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('/accounts', AccountController::class)->middleware('auth');
Route::resource('/students', StudentController::class)->middleware('auth');
Route::resource('/contacts', ContactController::class)->middleware('auth');
Route::resource('/people', PersonController::class)->middleware('auth');



