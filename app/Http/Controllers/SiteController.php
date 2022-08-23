<?php

namespace App\Http\Controllers;

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
}