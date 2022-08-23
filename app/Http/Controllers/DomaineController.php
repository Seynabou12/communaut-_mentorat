<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use Illuminate\Http\Request;

class DomaineController extends Controller
{
    public function index()
    {
        return view('domaines.index');
    }
    public function create()
    {
        return view('domaines.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Domaine::create($input);
        return redirect('/admin/dashbord')->with('flash-message', 'Votre niveaux à été bien enregistré');
    }
}
