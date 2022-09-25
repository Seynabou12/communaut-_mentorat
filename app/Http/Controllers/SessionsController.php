<?php

namespace App\Http\Controllers;

use App\Models\Connexion;
use App\Models\Mentor;
use App\Models\Mentore;
use App\Models\Notification;
use App\Models\Sessions;
use Carbon\Carbon;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{

    public function index()
    {
        $sessions = Sessions::join('connexions', function ($join)
        {
            $join->on('connexions.id','=', 'sessions.connexion_id')->where('connexions.mentor_id',Auth::user()->mentor->id);
        })->get("sessions.*");
        $mentores = Mentore::all();
        return view('sessions.index', compact('sessions', 'mentores'));
    }

    public function mentore()
    {
        $sessions = Sessions::join('connexions', function ($join)
        {
            $join->on('connexions.id','=','sessions.connexion_id')->where('connexions.mentore_id',Auth::user()->mentore->id);
        })->get(['sessions.*']);

        return view('sessions.mentore', compact('sessions'));
    }

    public function status(Request $request, $id)
    {
        $session = Sessions::findOrFail($id);
        $session->status = $request->status == 1 ? 'annulé' : 'realisé';
        $session->save();
        return redirect()->route('session.accueil', []);
    }

    public function rendu(Request $request, $id)
    {
        $session = Sessions::findOrFail($id);
        $session->status = 'rendu' ;
        $fileName = time() . $request->file('pdf')->getClientOriginalName();
        $path = $request->file('pdf')->storeAs('pdf', $fileName, 'public');
        $session->pdf =  '/storage/' . $path;
        $session->save();



        $notification = new Notification();
        $notification->titre = "Le mentoré " . $session->connexion->mentore->user->prenom . " " . $session->connexion->mentore->user->nom . " a rendu sa session ";
        $notification->date = Carbon::now();
        $notification->user_id = $session->connexion->mentor->user_id;
        $notification->lien = "/sessions" ;
        $notification->save();


        return redirect("/mes-sessions");
    }

    public function create()
    {
        $connexions = Connexion::where('mentor_id', Auth::user()->mentor->id)->where('status','accepté')->get();
        return view('sessions.create',compact('connexions'));
    }

    public function store(Request $request)
    {
       
        $input = $request->all();
        $session = new Sessions();
        $session->fill($input);
        $session->status = 'en cours';
        $session->save();
        
        $connexion = Connexion::findOrFail($session->connexion_id);

        $notification = new Notification();
        $notification->titre = "Le mentor " . $connexion->mentor->user->prenom . " " . $connexion->mentor->user->nom . " vous a planifié une session ";
        $notification->date = Carbon::now();
        $notification->user_id = $connexion->mentore->user_id;
        $notification->lien = "/mes-sessions" ;
        $notification->save();

        return redirect('/sessions')->with('flash-message', 'Votre sessions à été bien enregistré');
    }

    public function edit($id)
    {
        $session = Sessions::find($id);
        return view('sessions.edit')->with('session', $session);
    }

    public function update(Request $request, $id)
    {
        $session = Sessions::find($id);
        $input = $request->all();
        $session->update($input);
        return redirect('/sessions')->with('flash-message', 'Vos modifications ont été bien enregistré');
    }

    public function destroy(Sessions $session)
    {
        $session->delete();
        return back()->with('flash-message', 'compte supprimé avec succés');
    }

    public function session()
    {
        $session = new Sessions();
        $session->status = 'en attente';  
        $session->save();
        return redirect()->route('sessions.index');
    }

    public function voirplus($id)
    {
        $mentores = Mentore::all();
        $mentors = Mentor::all();
        $session = Sessions::findOrFail($id);
        return view('sessions.voirplus', compact('session'));
    }
    
}
