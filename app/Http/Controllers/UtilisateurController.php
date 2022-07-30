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
                dd('mentor');
                return redirect('/entreprises');
            } else if ($user->profil == 'mentore') {
                dd('mentore');
                return redirect('/utilisateurs');
            }
            dd('user simple');
        }
    }
}
