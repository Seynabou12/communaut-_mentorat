<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use Illuminate\Http\Request;

class DomaineController extends Controller
{
    public function index()
    {
        $domaines = Domaine::all();
        return view('domaines.index', compact('domaines'));
    }
    public function create()
    {
        $domaines = Domaine::all();
        return view('domaines.create', compact('domaines'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Domaine::create($input);
        return redirect('/domaines/create')->with('flash-message', 'Votre niveaux à été bien enregistré');
    }
}
