<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use Illuminate\Http\Request;

class NiveauController extends Controller
{
    public function index()
    {
        $niveaux = Niveau::all();
        return view('niveaux.index', compact('niveaux'));
    }

    public function create()
    {
        return view('niveaux.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Niveau::create($input);
        return redirect('/niveau/create')->with('flash-message', 'Votre niveaux à été bien enregistré');
    }
}
