<?php

namespace App\Http\Controllers;

use App\Models\Connexion;
use App\Models\Mentor;
use App\Models\Mentore;
use App\Models\Niveau;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MentoreController extends Controller
{

    public function index()
    {
        $mentores = Mentore::all();
        return view('mentores.index', compact('mentores'));
    }

    public function create()

    {
        $niveaux=Niveau::all();
        return view('mentores.create',compact('niveaux'));
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
            'user_id' => $user->id,
            'niveau_id' => $input['niveau_id']
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
        $mentore = Mentore::findorFail($id);
        $user = $mentore->user;
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
        $mentore->attente =  $input['attente'];
        $mentore->save();

        return redirect('/mentores')->with('flash-message', 'Vos modifications ont été bien enregistré');
    }

    public function destroy($id)
    {
        Mentore::destroy($id);
        return redirect('mentore')->with('flash-message', 'Mentoré supprimé avec succés');
    }

    public function accueil()
    {
        return redirect()->route('mentores.mentors', ['id' => AUth::user()->mentore->id]);
        $connexions = Connexion::where('mentore_id',Auth::user()->mentore->id)->get();
        $mentors = Mentor::all();
        $m = [];
        foreach ($connexions as $c ) {
            if(!$mentors->contains($c->mentor)){
                $m[] = $c->mentor;
            }
        }
        $mentors = $m;
        return view('mentores.accueil', compact('mentors','connexions'));
    }

    public function mentors($id)
    {
        $connexions = Connexion::where('mentore_id',$id)->get();
        return view('mentores.mentors', compact('connexions'));
    }

    public function connecte($id, $idMentor)
    {
        $mentor = Mentor::findOrFail($idMentor);
        $mentore = Mentore::findOrFail($id);
        $connexion = new Connexion();
        $connexion->mentor_id = $mentor->id;
        $connexion->mentore_id = $mentore->id;
        $connexion->date = Carbon::now();
        $connexion->status = 'en attente';  
        $connexion->save();
        return redirect()->route('mentores.mentors', ['id' => $id]);
    }

}
