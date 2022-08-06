<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use App\Models\Mentore;
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
                return redirect('/sessions');
            } else if ($user->profil == 'mentore') {
                return redirect('/mentores');
            } else if ($user->profil == 'admin') {
                return redirect('/mentors/liste');
            }
        }
    }
}
