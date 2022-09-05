<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function etat($id){
        $notification = Notification::findOrFail($id);
        $notification->isReady = true;
        $notification->save();

        return redirect($notification->lien);
    }
}
