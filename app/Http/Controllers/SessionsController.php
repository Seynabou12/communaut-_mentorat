<?php

namespace App\Http\Controllers;

use App\Models\Sessions;
use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function index()
    {
        $sessions = Sessions::all();
        return view('sessions.index', compact('sessions'));
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Sessions::create($input);
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
}
