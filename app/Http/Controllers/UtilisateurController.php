<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use App\Models\Mentore;
use App\Models\User;
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
            if(!Auth::user()->etat){
                return redirect()->route('unauthorization');
            }
            session()->regenerate();
            $user = Auth::user();
            if ($user->profil == 'mentor') {
                return redirect()->route('mentors.mentores',['id'=>$user->mentor->id]);
            } else if ($user->profil == 'mentore') {
                return redirect('/mentores');
            } else if ($user->profil == 'admin') {
                return redirect('/admin/dashbord');
            }
        }
    }

    public function etat($id){
        $user = User::findOrFail($id);
        $user->etat = !$user->etat;

        $user->save();
        if($user->mentor != null){
            return redirect()->route("mentor.liste");
        } 
        if($user->mentore != null){

            return redirect()->route("mentore.liste");
        }

    }

}
