<?php

namespace App\Http\Middleware;

use App\Models\ContactMessage;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class AdminNotification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $notifications = ContactMessage::where('status','NEW')->count();
        View::share("notifications",$notifications);
        return $next($request);
    }
}
