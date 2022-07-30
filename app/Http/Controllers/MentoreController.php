<?php

namespace App\Http\Controllers;

use App\Models\Mentore;
use App\Models\User;
use Illuminate\Http\Request;

class MentoreController extends Controller
{

    public function index()
    {
        $mentores = Mentore::all();
        return view('mentores.index', compact('mentores'));
    }

    public function create()
    {
        return view('mentores.create');
    }

    public function store(Request $request)

    {
        $input = $request->all();
        $fileName = time() . $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $input['photo'] = '/storage/' . $path;
        $user = User::create([
            'prenom'=>$input['prenom'],
            'nom'=>$input['nom'],
            'adresse'=>$input['adresse'],
            'telephone'=>$input['telephone'],
            'dateNaissance'=>$input['dateNaissance'],
            'profil'=>"mentore",
            'photo'=>$input['photo'],
            'email'=>$input['email'],
            'password'=>$input['password'],
        ]);
        Mentore::create([
            'attente' => $input['attente'],
            'user_id' => $user->id
        ]);
        return redirect('/login')->with('flash-message', 'Votre inscription à été bien enregistré');
    }

    public function show($id)
    {
        $mentore = Mentore::find($id);
        return view('mentores.show')->with('mentores', $mentore);
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
