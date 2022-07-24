<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\UtilisateurController;

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
    return view('site.index');
});
Route::get('/dashbord/welcome', function () {
    return view('dashbord.welcome',['profil' => 'mentor']);
});
Route::get('/mentors/create', function () {
    return view('mentors.create');
});

Route::get('/mentors', [MentorController::class, 'index']);
Route::get('/mentors/profil', [MentorController::class, 'profil']);
Route::post("/mentors/create",[MentorController::class, 'store']);
Route::get("/auth/login",[UtilisateurController::class, 'formLogin'])->name('auth.formLogin');
