<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use App\Models\Mentore;
use App\Models\Notification;
use App\Models\Sessions;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashbord()
    {
        
        $mentors = Mentor::all();
        $mentores = Mentore::all();
        $sessions = Sessions::all();
        return view('admin.dashbord', compact('mentors', 'mentores', 'sessions'));

        
    }


}
