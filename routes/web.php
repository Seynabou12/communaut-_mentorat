<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DomaineController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\MentoreController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\SiteController;
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

// Route::get('/', function () {
//     return view('site.index1');
// });

Route::get('/dashbord/welcome', function () {
    return view('dashbord.welcome', ['profil' => 'mentor']);
});
Route::get('/mentors/create', [MentorController::class, 'create']);
Route::post("/mentors/create", [MentorController::class, 'store']);
Route::get('/mentores/create', [MentoreController::class, 'create']);
Route::post('/mentores/create', [MentoreController::class, 'store']);

Route::get('/blog', [MentoreController::class, 'blog']);
Route::get('/', [SiteController::class, 'index1']);

Route::middleware(['authentification', 'notification'])->group(
    function () 
    {

        Route::get('/mentors/liste', [MentorController::class, 'index'])->name("mentor.liste");
        Route::get('/mentors/{id}/details', [MentorController::class, 'details'])->where('id', '[0-9]+');
        Route::get('/mentors/accueil', [MentorController::class, 'accueil']);
        Route::get('/mentors/{id}/mentores', [MentorController::class, 'mentores'])->name('mentors.mentores')->where('id', '[0-9]+');
        Route::get('/mentors/profil', [MentorController::class, 'profil']);
        Route::get('/mentors/{id}/connecte/{idMentore}', [MentorController::class, 'connecte'])->where('id', '[0-9]+')->where('idMentore', '[0-9]+');
        Route::get("/mentors/edit/{id}", [MentorController::class, 'edit'])->where('id', '[0-9]+');
        Route::post("/mentors/edit/{id}", [MentorController::class, 'update'])->where('id', '[0-9]+');

        Route::get("/connexion/{id}/status", [MentorController::class, 'status'])->where('id', '[0-9]+');

        Route::get('/mentores', [MentoreController::class, 'accueil']);
        Route::get('/mentores/{id}/mentors', [MentoreController::class, 'mentors'])->name('mentores.mentors')->where('id', '[0-9]+');
        Route::get('/mentores/liste', [MentoreController::class, 'index'])->name("mentore.liste");
        Route::get("/mentores/edit/{id}", [MentoreController::class, 'edit'])->where('id', '[0-9]+');
        Route::post("/mentores/edit/{id}", [MentoreController::class, 'update'])->where('id', '[0-9]+');
        Route::get('/mentores/{id}/connecte/{idMentor}', [MentoreController::class, 'connecte'])->where('id', '[0-9]+')->where('idMentor', '[0-9]+');

        Route::get('/mes-sessions', [SessionsController::class, 'mentore']);
        Route::get('/sessions', [SessionsController::class, 'index'])->name('session.accueil');
        Route::get('/sessions/create', [SessionsController::class, 'create']);
        Route::post('/sessions/create', [SessionsController::class, 'store']);
        Route::get('/sessions/{id}/voirplus', [SessionsController::class, 'voirplus'])->where('id', '[0-9]+');;
        Route::get('/session/{id}/status', [SessionsController::class, 'status'])->where('id', '[0-9]+');

        Route::get('/niveaux/create', [NiveauController::class, 'create']);
        Route::post('/niveaux/create', [NiveauController::class, 'store']);
        Route::get('/niveaux', [NiveauController::class, 'index'])->name('niveaux.index');

        Route::get('/domaines/create', [DomaineController::class, 'create']);
        Route::post('/domaines/create', [DomaineController::class, 'store']);

        Route::get('/admin/dashbord', [AdminController::class, 'dashbord']);

        Route::get('/notification/{id}/etat', [NotificationController::class, 'etat'])->where('id', '[0-9]+');
        Route::get('/user/{id}/etat', [UtilisateurController::class, 'etat'])->where('id', '[0-9]+');
    }

);

Route::get("/acces-denied", function () {
    return view('unauthorization');
})->name('unauthorization');
Route::get("/login", [UtilisateurController::class, 'formLogin'])->name('auth.formLogin');
Route::post("/login", [UtilisateurController::class, 'login'])->name('auth.login');
