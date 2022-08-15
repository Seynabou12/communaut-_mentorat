<?php

namespace App\Http\Controllers;

use App\Models\Connexion;
use App\Models\Sessions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{

    public function index()
    {
        $sessions = Sessions::all();
        return view('sessions.index', compact('sessions'));
    }

    public function mentore()
    {
        $sessions = Sessions::join('connexions', function ($join)
        {
            $join->on('connexions.id','=','sessions.connexion_id')->where('connexions.mentor_id',Auth::user()->mentore->id);
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
}
