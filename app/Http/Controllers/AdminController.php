<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use App\Models\Mentore;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashbord()
    {
        $mentors = Mentor::all();
        $mentores = Mentore::all();
        return view('admin.dashbord', compact('mentors', 'mentores'));
    }
}
