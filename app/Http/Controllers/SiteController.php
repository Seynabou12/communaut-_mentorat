<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use App\Models\Mentor;
use App\Models\Mentore;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index1()
    {
        $mentors = Mentor::all();
        $mentores = Mentore::all();
        return view('site.index1', compact('mentors', 'mentores'));
    }

    public function mentoré()
    {
        return view('site.mentoré');
    }
    public function choix()
    {
        return view('site.choix');
    }
    public function blog(Request $request)
    {
        $item = 0;
        if (isset($request->domaine)) {
            $mentors = Mentor::where("domaine_id", $request->domaine)->get();
            $item = $request->domaine;
        } else {
            $mentors = Mentor::all();
        }
        $domaines = Domaine::all();
        
        return view('site.blog', compact('mentors', 'domaines', 'item'));
    }

    public function mentore()
    {
        return view('site.mentore');
    }


    public function mentor()
    {
        return view('site.mentor');
    }
}
