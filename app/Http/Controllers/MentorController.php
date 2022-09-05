<?php

namespace App\Http\Controllers;

use App\Models\Connexion;
use App\Models\Domaine;
use App\Models\Mentor;
use App\Models\Mentore;
use App\Models\Notification;
use App\Models\User;
use Carbon\Carbon;
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
        $domaines=Domaine::all();
        return view('mentors.create', compact('domaines'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $fileName = time() . $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('imagess', $fileName, 'public');
        $input['photo'] = '/storage/' . $path;
        // $domaine = $input['domaine_id'];
        // $input['domaine_id'] = implode(',',$domaine);

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
            'user_id' => $user->id,
            'domaine_id' => $input['domaine_id'],
        ]);

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
        if ($request->file('photo') != null)
        {
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

    public function accueil()
    {
        return view('mentors.accueil');
    }

    public function details($id)
    {
        $mentor = Mentor::findOrFail($id);
        return view('mentors.details', compact('mentor'));
    }
 
    public function mentores($id)
    {
        $connexions = Connexion::where('mentor_id',$id)->get();
        return view('mentors.mentores', compact('connexions'));
    }

    public function connecte($id, $idMentore)
    {
        $mentore = Mentore::findOrFail($idMentore);
        $mentor  = Mentor::findOrFail($id);
        $connexion = new Connexion();
        $connexion->mentore_id = $mentore->id;
        $connexion->mentor_id = $mentor->id;
        $connexion->date = Carbon::now();
        $connexion->status = 'en attente';
        $connexion->save();
        $notification = new Notification();
        $notification->titre = "Le mentoré " . $connexion->mentore->user->prenom ." " . $connexion->mentore->user->nom . " vous a envoyé une demande de connexion ";
        $notification->date = Carbon::now();
        $notification->user_id = $mentor->user_id;
        $notification->lien = "/mentors/".$connexion->mentor_id."/mentores";
        $notification->save();
        return redirect()->route('mentors.mentores', ['id' => $id]);
    }

    public function status(Request $request, $id)
    {
        $connexion = Connexion::findOrFail($id);
        $connexion->status = $request->status == 1 ? 'accepté' : 'refusé';
        $connexion->save();
        $notification = new Notification();
        $notification->titre = "Le mentor " . $connexion->mentor->user->prenom ." " . $connexion->mentor->user->nom . " a ". $connexion->status . " votre connexion";
        $notification->date = Carbon::now();
        $notification->user_id = $connexion->mentore->user_id;
        $notification->lien = "/mentores/".$connexion->mentore_id."/mentors";
        $notification->save();
        return redirect()->route('mentors.mentores', ['id' => $connexion->mentor_id]);
    }
}
