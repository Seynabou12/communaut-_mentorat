<?php

namespace App\Http\Controllers;

use App\Models\Mentore;
use Illuminate\Http\Request;

class MentoreController extends Controller
{
    
    public function index()
    {
        $mentores = Mentore::all();
        return view('mentores.index')->with('mentores', $mentores);
    }

    public function create()
    {
        return view('mentores.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Mentore::create($input);
        return redirect('mentore')->with('flash-message', 'Votre inscription à été bien enregistré');
    }

    public function show($id)
    {
        $mentore = Mentore::find($id);
        return view('mentores.show')->with('mentors', $mentore);
    }

    public function edit($id)
    {
        $mentore = Mentore::find($id);
        return view('mentores.edit')->with('mentore', $mentore);
    }

    public function update(Request $request, $id)
    {
        $mentore = Mentore::find($id);
        $input = $request->all();
        $mentore->update($input);
        return redirect('mentore')->with('flash-message', 'Vos modifications ont été bien enregistré');
    }

    public function destroy($id)
    {
        Mentore::destroy($id);
        return redirect('mentore')->with('flash-message', 'Mentoré supprimé avec succés');
    }
}
