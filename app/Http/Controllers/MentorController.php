<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function index()
    {
        $mentors = Mentor::all();
        return view('mentors.index')->with('mentors', $mentors);
    }

    public function create()
    {
        return view('mentors.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $mentor = Mentor::create($input);
        return redirect('mentor')->with('flash-message', 'Votre inscription à été bien enregistré');
    }

    public function show($id)
    {
        $mentor = Mentor::find($id);
        return view('mentors.show')->with('mentors', $mentor);
    }

    public function edit($id)
    {
        $mentor = Mentor::find($id);
        return view('mentors.edit')->with('mentor', $mentor);
    }

    public function update(Request $request, $id)
    {

        $mentor = Mentor::find($id);
        $input = $request->all();
        $mentor->update($input);
        return redirect('mentor')->with('flash-message', 'Vos modifications ont été bien enregistré');
    }

    public function destroy($id)
    {
        Mentor::destroy($id);
        return redirect('mentor')->with('flash-message', 'Mentor supprimé avec succés');
    }
}
