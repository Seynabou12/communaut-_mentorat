<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use App\Models\User;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function index()
    {
        $mentors = Mentor::all();
        return view('mentors.index', compact('mentors'));
    }

    public function create()
    {
        return view('mentors.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $fileName = time() . $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $input['photo'] = '/storage/' . $path;

        $user = User::create([
            'prenom' => $input['prenom'],
            'nom' => $input['nom'],
            'adresse' => $input['adresse'],
            'telephone' => $input['telephone'],
            'dateNaissance' => $input['dateNaissance'],
            'profil' => "mentor",
            'photo' => $input['photo'],
            'email' => $input['email'],
            'password' => $input['password'],
        ]);
        Mentor::create([
            'parcours' => $input['parcours'],
            'experience' => $input['experience'],
            'user_id' => $user->id
        ]);;
        return redirect('/login')->with('flash-message', 'Votre inscription à été bien enregistré');
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
        $mentor = Mentor::findorFail($id);
        $user = $mentor->user;
        $input = $request->all();
        if ($request->file('photo') != null){

            $fileName = time() . $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('images', $fileName, 'public');
            $input['photo'] = '/storage/' . $path;
        } else {
            $input['photo'] = $user->photo;
        }

        $user->prenom = $input['prenom'];
        $user->nom = $input['nom'];
        $user->adresse = $input['adresse'];
        $user->telephone = $input['telephone'];
        $user->dateNaissance = $input['dateNaissance'];
        $user->photo = $input['photo'];
        $user->email = $input['email'];
        $user->save();
        $mentor->parcours =  $input['parcours'];
        $mentor->experience =   $input['experience'];
        $mentor->save();
        return redirect('mentors')->with('flash-message', 'Vos modifications ont été bien enregistré');
    }

    public function destroy($id)
    {
        Mentor::destroy($id);
        return redirect('mentor')->with('flash-message', 'Mentor supprimé avec succés');
    }
}
