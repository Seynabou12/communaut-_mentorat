<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\MentoreController;
use App\Http\Controllers\SessionsController;
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

// Route::get('/mentores/create', function () {
//     return view('mentores.create');
// });

Route::get('/mentors/liste', [MentorController::class, 'index']);
Route::get('/mentors/profil', [MentorController::class, 'profil']);
Route::post("/mentors/create",[MentorController::class, 'store']);
Route::get("/mentors/edit/{id}",[MentorController::class, 'edit'])->where('id','[0-9]+');
Route::post("/mentors/edit/{id}",[MentorController::class, 'update'])->where('id','[0-9]+');

Route::get('/mentores', [MentoreController::class, 'home']);
Route::get('/mentores/liste', [MentoreController::class, 'index']);
Route::get('/mentores/create',[MentoreController::class, 'create']);
Route::post('/mentores/create',[MentoreController::class, 'store']);
Route::get("/mentores/edit/{id}",[MentoreController::class, 'edit'])->where('id','[0-9]+');
Route::post("/mentores/edit/{id}",[MentoreController::class, 'update'])->where('id','[0-9]+');

Route::get('/sessions', [SessionsController::class, 'index']);
Route::get('/sessions/create', [SessionsController::class, 'create']);
Route::post('/sessions/create', [SessionsController::class, 'store']);


Route::get("/login",[UtilisateurController::class, 'formLogin'])->name('auth.formLogin');
Route::post("/login",[UtilisateurController::class, 'login'])->name('auth.login');
