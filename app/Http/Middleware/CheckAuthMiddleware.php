<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();
        if ($user) {
            if ($user->role == 'member') {
                return redirect('/member');
            }
            else if ($user->role == 'admin') {
                return redirect('/admin');
            }
            else {
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }
}
