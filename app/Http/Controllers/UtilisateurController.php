<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UtilisateurController extends Controller
{
    public function formLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $tab = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($tab, $request->all())) {
            session()->regenerate();
            $user = Auth::user();
            if ($user->profil == 'mentor') {
                return redirect('/mentors/accueil');
            } else if ($user->profil == 'mentore') {
                return redirect('/mentores/accueil');
            }
            else if ($user->profil == 'admin') {
                return redirect('/mentors/liste');
            }
            dd('user simple');
        }
    }
}
