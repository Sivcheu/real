<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/register', [\App\Http\Controllers\UserController::class, 'registerForm']);
Route::post('/store-user', [\App\Http\Controllers\UserController::class, 'userStore'])->name('user-added');
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/loginForm', [\App\Http\Controllers\UserController::class, 'loginForm']);
Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);
Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout']);
Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'admin'])->middleware('adminAuth');
Route::get('/adminForm',[\App\Http\Controllers\AdminController::class, 'adminLoginForm']);
Route::post('/adminLogin',[\App\Http\Controllers\AdminController::class,'adminLogin']);
Route::get('/adminLogout',[\App\Http\Controllers\AdminController::class, 'logout']);
//for admin
Route::get('/event-index', [\App\Http\Controllers\EventController::class, 'index']);
Route::get('/event-create', [\App\Http\Controllers\EventController::class, 'create']);
Route::post('/event-add', [\App\Http\Controllers\EventController::class, 'store'])->name('add_event');
Route::get('/event-show/{id}', [\App\Http\Controllers\EventController::class, 'show']);
Route::get('/event-edit/{id}', [\App\Http\Controllers\EventController::class, 'edit']);
Route::post('/event-update', [\App\Http\Controllers\EventController::class, 'update'])->name('update_event');
Route::get('/event-delete/{id}', [\App\Http\Controllers\EventController::class, 'destroy']);
Route::get('/userJoinEvent',[\App\Http\Controllers\EventHasUserController::class,'userJoinEvent']);

Route::post('/test',[\App\Http\Controllers\EventHasUserController::class,'join'])->middleware("userAuth");
//for user
Route::get('/event',[\App\Http\Controllers\EventController::class,'indexForUser']);

//for admin
Route::get('/org-index',[\App\Http\Controllers\OrgController::class, 'index']);
Route::get('/org-create', [\App\Http\Controllers\OrgController::class, 'create']);
Route::post('/org-add', [\App\Http\Controllers\OrgController::class, 'store'])->name('add_org');
Route::get('/org-show/{id}', [\App\Http\Controllers\OrgController::class, 'show']);
Route::get('/org-edit/{id}', [\App\Http\Controllers\OrgController::class, 'edit']);
Route::post('/org-update', [\App\Http\Controllers\OrgController::class, 'update'])->name('update_org');
Route::get('/org-delete/{id}', [\App\Http\Controllers\OrgController::class, 'destroy']);

//for admin
Route::get('/donation-index',[\App\Http\Controllers\DonationController::class,'donation']);

//for user
Route::get('/donation',[\App\Http\Controllers\DonationController::class, 'index']);
Route::get('/donationForm/{id}',[\App\Http\Controllers\DonationController::class,'donationForm']);
Route::post('/donate',[\App\Http\Controllers\DonationController::class,'donate']);

//for user
Route::get('/volForm/{id}',[\App\Http\Controllers\VolunteerController::class,'joinForm']);
Route::post('/vol-join',[\App\Http\Controllers\VolunteerController::class,'join']);
