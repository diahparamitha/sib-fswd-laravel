<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   public function handle($request, Closure $next)
    {
        $user = User::find(auth()->id());

        $all_user = $user->role === 'admin';

        if ($all_user) {
            return $next($request);
        }

        // Tindakan jika user bukan admin atau tidak memiliki akses yang sesuai
        return redirect()->back()->with('alert', 'Kamu tidak punya akses!');
    }
}
