<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = User::where('email', $request->email)->get();
        if ($user[0]->state == 'Inactivo') {
            return redirect()->back();
        }
        return $next($request);
    }
}
