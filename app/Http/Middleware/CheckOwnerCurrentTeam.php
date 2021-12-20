<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckOwnerCurrentTeam
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $checkUserTeams = Auth::user()->ownedTeams->contains(Auth::user()->currentTeam);

        if(! $checkUserTeams) {
            abort(403);
        }

        return $next($request);
    }
}
