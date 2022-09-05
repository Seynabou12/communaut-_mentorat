<?php

namespace App\Http\Middleware;

use App\Models\Notification;
use Closure;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;

class NotificationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user() != null) {
            $notifications = Notification::where('user_id', Auth::user()->id)->where('isReady', false)->get();
        } else {
            $notifications = new Collection();
        }
        view()->share('notifications', $notifications);
        return $next($request);
    }
}
